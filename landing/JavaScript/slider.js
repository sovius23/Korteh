let heralds = document.querySelectorAll(".slide-component");
let slider = document.querySelector("#slider");
let widthOfSlider;
let count = 0;
let heightOfSlider;


init();
window.addEventListener("resize", () => {
    init();
});

document.querySelector("#right").addEventListener("click", () => {
    right();
})
document.addEventListener("keydown", (e) => {
    if (e.code == "ArrowRight") {
        right();
    } else if (e.code == "ArrowLeft") {
        left();
    }
})

document.querySelector("#left").addEventListener("click", () => {
    left();
});

function roll() {
    slider.style.transform = "translate(-" + count * widthOfSlider / 4 + "px)";
    slider.style.height = heightOfSlider + "px";
}

function init() {

    widthOfSlider = document
        .querySelector("#slider-wrap")
        .offsetWidth;
    if (widthOfSlider > 550) {
        slider.style.flexDirection = "row";
        slider.style.width = widthOfSlider * heralds.length + "px";
        slideSizer();
        roll();
        slider.style.height = "auto";
        heightOfSlider = slider.offsetHeight;
    } else {
        slider.style.display = "flex";
        slider.style.flexDirection = "column";
        heralds.forEach((item) => {
            item.style.width = widthOfSlider - 50 + "px";
            item.style.height = widthOfSlider / 1.5 + "px";
        })
    }
}

function slideSizer() {
    heralds.forEach((item) => {
        item.style.width = widthOfSlider / 4 + "px";
        item.style.height = (widthOfSlider / 4) / 1.375 + "px";


        if (item.className == "slide-component active") {
            item.style.width = widthOfSlider / 2 + "px";
            item.style.height = (widthOfSlider / 2) / 1.375 + "px";

        }
    });
}

function classSwitch(count) {
    heralds.forEach((item) => {
        if (item.className == "slide-component active") {
            item.classList.remove("active");
        }
    })
    heralds[count].classList.add("active");
}

function right() {
    count++;
    if (count > heralds.length - 1) {
        count = 0;
    }
    classSwitch(count);
    slideSizer();
    roll();
}

function left() {
    count--;
    if (count < 0) {
        count = heralds.length - 1
    }

    classSwitch(count);
    slideSizer();
    roll();
}