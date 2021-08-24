//burger menu click animation

// on off switch. false (off) default;
let switchToggle = false;

// const mainPage = document.getElementById("frozen");
const sidenav = document.getElementById("navbar");
const burger = document.querySelectorAll(".hamburger");
const burgerContainer = document.querySelectorAll(".navbar_burger");
const overlay = document.querySelector(".site_overlay");
const main = document.querySelector("main");

for (let i = 0; i < burger.length; i = i + 1) {
    burger[i].addEventListener("click", function(){
        buttonToggle();
    });
}

function buttonToggle() {
    switchToggle = !switchToggle;

    if (switchToggle) {
        console.log("yes");

        for (let i = 0; i < burger.length; i = i + 1) {
            console.log(burger[i]);
            burger[i].classList.add("is-active");
        }

        sidenav.style.display = "block";
        // sidenav.style.position = "relative";
        main.classList.add("freeze");
        overlay.style.display = "block";

    } else {

        for (let i = 0; i < burger.length; i = i + 1) {
            console.log(burger[i]);
            burger[i].classList.remove("is-active");
        }

        sidenav.style.display = "none";
        main.classList.remove("freeze");
        overlay.style.display = "none";
    }
}