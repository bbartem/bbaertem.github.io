function calculateMean() {
    let numbers = document.getElementById("numbers").value.split(",");
    let sumOfCubes = 0;
    for (let i = 0; i < numbers.length; i++) {
        sumOfCubes += Math.pow(parseFloat(numbers[i]), 3);
    }
    let mean = sumOfCubes / numbers.length;
    document.getElementById("result").innerHTML = "Среднее арифметическое значение кубов введенных чисел равно:: " + mean.toFixed(2);
}
function calculate() {
    const x1 = Number(document.getElementById("x1").value);
    const y1 = Number(document.getElementById("y1").value);
    const x2 = Number(document.getElementById("x2").value);
    const y2 = Number(document.getElementById("y2").value);
    const x3 = Number(document.getElementById("x3").value);
    const y3 = Number(document.getElementById("y3").value);

    const side1 = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
    const side2 = Math.sqrt(Math.pow(x3 - x2, 2) + Math.pow(y3 - y2, 2));
    const side3 = Math.sqrt(Math.pow(x1 - x3, 2) + Math.pow(y1 - y3, 2));

    const perimeter = side1 + side2 + side3;

    const semiperimeter = perimeter / 2;
    const area = Math.sqrt(semiperimeter * (semiperimeter - side1) * (semiperimeter - side2) * (semiperimeter - side3));

    document.getElementById("perimeter").textContent = perimeter.toFixed(2);
    document.getElementById("area").textContent = area.toFixed(2);
}