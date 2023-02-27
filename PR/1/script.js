'use strict';
function task1(){
    alert("Задание 1 - Спрашивает у пользователя ряд вопросов и выводит все на экран.");
    let name = prompt('Как тебя зовут?');
    alert('Вас зовут: '+name);
    let country = prompt('В какой стране ты живешь?');
    alert('Ваша страна: '+country);
    let city = prompt('В каком городе ты живешь?');
    alert('Ваш город: '+city);
    if(confirm('Вывод данных?')){
        alert('Вас зовут: '+name +'\nВаша страна:'+country+'\nВаш город: '+city);
    } else {
        alert('OK')
    }
}

function task2(){
    alert("Задание 2 - Возвращает меньшее из чисел a и b.");
    let taskTwoVariableA = prompt('Введите число a:');
    let taskTwoVariableB = prompt('Введите число b:');
    alert('Меньшее значение: '+min(taskTwoVariableA, taskTwoVariableB));
}
function min(a,b){
    return a<b ? a : b;
}
function task3(){
    alert("Задание 3 - Функция по выводу четных чисел на экран в диапазоне от 20 до 45.");
    printEvenNumbers(20, 45);
    alert("Задание 3 - Стоп.");
}
function printEvenNumbers(start, end) {
    for (let i = start; i <= end; i++) {
        if (i % 2 === 0) {
            console.log(i);
            alert(i);
        }
    }
}
function task4(){
    alert("Задание 4 - Функция isEmpty(obj), которая возвращает true, если у объекта нет свойств, иначе false.\n");
    let schedule = {};
    alert(isEmpty(schedule));
    schedule["8:30"] = "get up";
    alert(isEmpty(schedule));
}
function isEmpty(obj) {
    for (let key in obj) {
        if (obj.hasOwnProperty(key)) {
            return false;
        }
    }
    return true;
}


function task5(){
    alert("Задание 5 - Функция multiplyNumeric(obj), " +
        "которая умножает все числовые свойства объекта obj на 2.\n");
    let menu = {
        width: 200,
        height: 300,
        title: "My menu"
    };
    multiplyNumeric(menu);
    console.log(menu)
    alert("Откройте консоль.")
    menu = {
        width: 400,
        height: 600,
        title: "My menu"
    };
}
function multiplyNumeric(obj) {
    for (let key in obj) {
        if (typeof obj[key] === 'number') {
            obj[key] *= 2;
        }
    }
}


function task6(){
    alert("Цикл, который предлагает prompt ввести число, большее 100, но меньше 250. " +
        "Если посетитель ввёл другое число – попросить ввести ещё раз, и так далее.\n")
    let num;
    while (true) {
        num = prompt("Введите число больше 100 и меньше 250: ");
        if (num > 100 && num < 250) {
            break;
        }
    }
    console.log("Вы ввели: " + num);
    alert("Вы ввели: " + num);
}