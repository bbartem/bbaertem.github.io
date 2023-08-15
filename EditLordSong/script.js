document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('container');
    const addButton = document.getElementById('addButton');
    const resetButton = document.getElementById('resetButton');

    addButton.addEventListener('click', function () {
        const element = document.createElement('div');
        element.className = 'element';

        const select = document.createElement('select');
        select.className = 'select';
        const option1 = document.createElement('option');
        option1.textContent = 'Куплет';
        const option2 = document.createElement('option');
        option2.textContent = 'Припев';
        select.appendChild(option1);
        select.appendChild(option2);

        const textarea = document.createElement('textarea');
        textarea.className = 'textarea';

        const removeButton = document.createElement('button');
        removeButton.className = 'removeButton';
        removeButton.textContent = 'Удалить';

        element.appendChild(select);
        element.appendChild(textarea);
        element.appendChild(removeButton);

        container.appendChild(element);

        removeButton.addEventListener('click', function () {
            container.removeChild(element);
        });
    });
    resetButton.addEventListener('click', function () {
        location.reload();
    });
});
