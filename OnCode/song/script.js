const downloadButton = document.querySelector('.song-card__download');
const fileUrl = 'Преклонится_всякое_колено.pdf';

downloadButton.addEventListener('click', () => {
    fetch(fileUrl)
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(new Blob([blob]));
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Преклонится_всякое_колено.pdf';
            document.body.appendChild(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
        })
        .catch(error => console.error(error));
});
