function printName() {
    alert("Бреус Артём Д., \nгруппа 22-Д9-3ИНС");
}

let valueSwitcher = true
function secondTask() {
    document.getElementById("task_2").value = valueSwitcher ? "Доктор Стрэндж" : "Практическая 2"
    valueSwitcher = !valueSwitcher
}

function thirdTask() {
    alert(document.getElementById("text_input").value)
}

var colorSwitcher = true
var aboba = []
aboba[10000] = 9;
var aboba1[10000] = [...aboba];
var aboba2


function fourthTask() {
    document.getElementById("switching_color").style.color = colorSwitcher ? "red" : "black"
    colorSwitcher = !colorSwitcher
}