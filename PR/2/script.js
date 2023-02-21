function printName() {
    alert("Бреус Артём Д., \nгруппа 22-Д9-3ИНС");
}

let valueSwitcher = true
let colorSwitcher = true

function secondTask() {
    document.getElementById("task_2").value = valueSwitcher ? "Доктор Стрэндж" : "Практическая 2"
    valueSwitcher = !valueSwitcher
}

function thirdTask() {
    alert(document.getElementById("text_input").value)
}

function fourthTask() {
    document.getElementById("switching_color").style.color = colorSwitcher ? "red" : "black"
    colorSwitcher = !colorSwitcher
}