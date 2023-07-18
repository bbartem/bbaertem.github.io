function generate() {
    
}

async function downloadExcel() {
    const inputText = document.getElementById("inputText").value;
    const lines = inputText.split("\n");
    const data = [];

    lines.forEach((line) => {
        const columns = line.split(" ");
        if (columns.length >= 2) {
            const number = columns[0];
            const text = columns.slice(1).join(" ");
            data.push([number, text]);
        }
    });

    const ws = XLSX.utils.aoa_to_sheet(data);
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Sheet 3");

    const currentDate = new Date().toLocaleDateString().replace(/\//g, "-");
    const fileName = `Программа ${currentDate}.xlsx`;

    const wbout = XLSX.write(wb, {bookType: "xlsx", type: "array"});
    const blob = new Blob([wbout], {type: "application/octet-stream"});

    const formulasXlsxPath = "excel/formulas.xlsx";
    const formulasWb = XLSX.read(await fetch(formulasXlsxPath).then((res) => res.arrayBuffer()), {type: "array"});
    const sheetIndex = 2; // Индекс требуемой страницы в формулах.xlsx (0 - первая страница, 1 - вторая страница, и т.д.)

    formulasWb.Sheets[formulasWb.SheetNames[sheetIndex]] = ws;
    const formulasWbout = XLSX.write(formulasWb, {bookType: "xlsx", type: "array"});

    const formulasBlob = new Blob([formulasWbout], {type: "application/octet-stream"});

    saveAs(formulasBlob, fileName);
    //saveAs(blob, fileName);
}

function resetFields() {
    document.getElementById("inputText").value = "";
}
