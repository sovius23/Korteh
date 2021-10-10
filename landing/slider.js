let img = document.querySelectorAll(".slide-component");
let slider = document.querySelector("#slider");
let width;
let count=0;
let sizeOfSlider=img.length-1;

init();
window.addEventListener("resize",(e)=>{init();});

document.querySelector("#right").addEventListener("click", function() {
    count++;
 if (count > img.length-1) {count=0;}
    classSwitch(count);
    slideSizer();
    roll();
    })

document.querySelector("#left").addEventListener("click", function() {
    count--;
    if(count<0){count=img.length-1};
    classSwitch(count);
    slideSizer();
    roll();
    });

function roll () {
    slider.style.transform="translate(-"+count*width/4+"px)";
};

function init (){
    width = document
        .querySelector("#slider-wrap")
        .offsetWidth;
    slider.style.width = width * img.length + "px";
    slideSizer();
    roll();
};

function slideSizer(){
    img.forEach((item) => {
        item.style.width = width/4 + "px";
        item.style.height =(width/4)/1.375 + "px";
        
       
        if(item.className=="slide-component active"){
            item.style.width = width/2 + "px";
             item.style.height =( width/2)/1.375+ "px";
            
        }
    });
};

function classSwitch(count){
    img.forEach((item)=>{
        if(item.className=="slide-component active"){
            item.classList.remove("active");
        }
    })
    img[count].classList.add("active");
};