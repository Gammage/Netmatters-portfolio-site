//burger menu click animation

// on off switch. false (off) default;
let switchToggle = false;

const body = document.querySelector("body");
const sidenav = document.getElementById("navbar");
const burger = document.querySelectorAll(".hamburger");
const burgerContainer = document.querySelectorAll(".navbar_burger");
const overlay = document.querySelector(".site_overlay");
const main = document.querySelector("main");


burger.addEventListener("click", function(){
    buttonToggle();
}
 

function buttonToggle() {
    switchToggle = !switchToggle;

    if (switchToggle) {
        console.log("yes");

        sidenav.style.display = "block";
        main.classList.add("freeze");
        overlay.style.display = "block";
        body.classList.add("hideme");
    } 

    document.querySelector(".site_overlay").addEventListener("click", function() {
        overlay.style.display = "none";
        main.classList.remove("freeze");
        sidenav.style.display = "none";  
        overlay.style.display = "none";
        body.classList.remove("hideme");
    });
}

