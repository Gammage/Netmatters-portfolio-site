//burger menu click animation

// on off switch. false (off) default;
let switchToggle = false;

const body = document.querySelector("body");
const sidenav = document.getElementById("navbar");
const burger = document.querySelectorAll(".hamburger");
const burgerContainer = document.querySelectorAll(".navbar_burger");
const overlay = document.querySelector(".site_overlay");
const main = document.querySelector("main");
const pushy = document.querySelector(".navbar_push")

for (let i = 0; i < burger.length; i = i + 1) {
    burger[i].addEventListener("click", function(){
        buttonToggle();
    });
}

overlay.addEventListener("click", function(event) {
    buttonToggle();
})

function buttonToggle() {
    switchToggle = !switchToggle;

    if (switchToggle) {
        console.log("yes");

        for (let i = 0; i < burger.length; i = i + 1) {
            console.log(burger[i]);
            burger[i].classList.add("is-active");
        }

        
        sidenav.style.display = "block";
        overlay.style.display = "block";


    } else {
        console.log("no");

        for (let i = 0; i < burger.length; i = i + 1) {
            console.log(burger[i]);
            burger[i].classList.remove("is-active");
        }

       
        overlay.style.display = "none";
        sidenav.style.display = "none";  
        body.classList.remove("hideme");
    }
};
