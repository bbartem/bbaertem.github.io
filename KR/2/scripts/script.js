'use strict';
const addBorderBtn = document.getElementById("addBorderBtn");
const deleteBorderBtn = document.getElementById("deleteBorderBtn");
const addShadowBtn = document.getElementById("addShadowBtn");
const deleteShadowBtn = document.getElementById("deleteShadowBtn");
const addRoundingBtn = document.getElementById("addRoundingBtn");
const deleteRoundingBtn = document.getElementById("deleteRoundingBtn");
const myImage = document.getElementById("myImage");

addBorderBtn.addEventListener("click", function() {
    myImage.style.border = "5px solid red";
});

deleteBorderBtn.addEventListener("click", function() {
    myImage.style.border = "";
});

addShadowBtn.addEventListener("click", function() {
    myImage.style.boxShadow = "15px 15px 30px 0px black";
});

deleteShadowBtn.addEventListener("click", function() {
    myImage.style.boxShadow = "";
});

addRoundingBtn.addEventListener("click", function() {
    myImage.style.borderRadius = "15px";
});

deleteRoundingBtn.addEventListener("click", function() {
    myImage.style.borderRadius = "";
});
