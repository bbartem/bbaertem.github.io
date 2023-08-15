document.addEventListener('DOMContentLoaded', function () {
    const convertButton = document.getElementById('convertButton');
    let coupletCount = 0; // Инициализируем счетчик куплетов

    convertButton.addEventListener('click', function () {
        const elements = document.querySelectorAll('.element');

        let htmlContent = '';

        elements.forEach((element, index) => {
            const select = element.querySelector('.select');
            const textarea = element.querySelector('.textarea');

            const selectValue = select.value;
            const textareaValue = textarea.value.replace(/\n/g, '<br>');

            if (selectValue === 'Куплет') {
                coupletCount++;
                htmlContent += `<p class="coupletCount">${coupletCount} куплет:</p>\n`;
            } else {
                htmlContent += `<p class="selectValue">${selectValue}:</p>\n`;
            }

            htmlContent += `<p class="textareaValue">${textareaValue}</p>\n`;

            if (index < elements.length - 1) {
                htmlContent += '\n';
            }
        });

        const fullHtml = `<!DOCTYPE html>
<html>
<head>
<title>Converted Text</title>
</head>
<body>
${htmlContent}
<button id="downloadButton">Скачать</button>
</body>
</html>`;

        const newWindow = window.open();
        newWindow.document.open();
        newWindow.document.write(fullHtml);

        const downloadButton = newWindow.document.getElementById('downloadButton');
        downloadButton.addEventListener('click', function () {
            const blob = new Blob([htmlContent], { type: 'text/plain;charset=utf-8' });
            const fileName = 'converted_text.txt';
            const a = document.createElement('a');
            a.href = URL.createObjectURL(blob);
            a.download = fileName;
            a.click();
        });

        newWindow.document.close();
    });
});
