const executeBtn = $("#executeBtn");
const revertBtn = $("#revertBtn");
const block = $("#block");

let currentX = 8;
let currentY = 132.438;
let currentSize = 100;

executeBtn.click(function() {
    currentX += 50;
    currentY += 50;
    currentSize += 150;
    block.css({
        left: currentX + "px",
        top: currentY + "px",
        width: currentSize + "px",
        height: currentSize + "px"
    });
});

revertBtn.click(function() {
    currentX = 8;
    currentY = 132.438;
    currentSize = 100;
    block.css({
        left: currentX + "px",
        top: currentY + "px",
        width: currentSize + "px",
        height: currentSize + "px"
    });
});
