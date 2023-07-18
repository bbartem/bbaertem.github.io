async function generate() {
    const inputText = document.getElementById("inputText").value;
    const lines = inputText.split("\n");

    const dataSheet2 = [];
    const dataSheet3 = [];
    let currentSheet = null;

    const data = [];

    lines.forEach((line) => {
        if (line.startsWith("Пис.") || line.startsWith("ХОР") || /^\d/.test(line)) {
            if (currentSheet === "Sheet 2") {
                dataSheet2.push(line);
            } else if (currentSheet === "Sheet 3") {
                dataSheet3.push(line);
            }
        } else if (line.startsWith("2 Проповедь")) {
            currentSheet = "Sheet 3";
        } else {
            currentSheet = "Sheet 2";
        }

        const columns = line.split(" ");
        if (columns.length >= 2) {
            const number = columns[0];
            const text = columns.slice(1).join(" ");
            data.push([number, text]);
        }
    });

    const wsSheet2 = XLSX.utils.aoa_to_sheet(dataSheet2.map((line) => [line]));
    const wsSheet3 = XLSX.utils.aoa_to_sheet(dataSheet3.map((line) => [line]));

    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, wsSheet2, "Sheet 2");
    XLSX.utils.book_append_sheet(wb, wsSheet3, "Sheet 3");

    const ws = XLSX.utils.aoa_to_sheet(data);
    XLSX.utils.book_append_sheet(wb, ws, "Sheet 3");

    const currentDate = new Date().toLocaleDateString().replace(/\//g, "-");
    const fileName = `Программа ${currentDate}.xlsx`;

    const wbout = XLSX.write(wb, { bookType: "xlsx", type: "array" });
    const blob = new Blob([wbout], { type: "application/octet-stream" });

    const formulasXlsxPath = "excel/formulas.xlsx";
    const formulasWb = XLSX.read(await fetch(formulasXlsxPath).then((res) => res.arrayBuffer()), { type: "array" });
    const sheetIndex = 2; // Индекс требуемой страницы в формулах.xlsx (0 - первая страница, 1 - вторая страница, и т.д.)

    formulasWb.Sheets[formulasWb.SheetNames[sheetIndex]] = ws;
    const formulasWbout = XLSX.write(formulasWb, { bookType: "xlsx", type: "array" });

    const formulasBlob = new Blob([formulasWbout], { type: "application/octet-stream" });

    saveAs(formulasBlob, fileName);
    saveAs(blob, fileName);
}

function resetFields() {
    document.getElementById("inputText").value = "";
}
