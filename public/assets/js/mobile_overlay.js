//burger menu click animation

// on off switch. false (off) default;
let switchToggle = false;

const body = document.querySelector("body");
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

        for (let i = 0; i < hamburgers.length; i = i + 1) {
            console.log(hamburgers[i]);
            hamburgers[i].classList.add("is-active");
        }

        sidenav.style.display = "block";
        main.classList.add("freeze");
        overlay.style.display = "block";
        body.classList.add("hideme");
    } else {
        console.log("no");

        for (let i = 0; i < hamburgers.length; i = i + 1) {
            console.log(hamburgers[i]);
            hamburgers[i].classList.remove("is-active");
        }


        overlay.style.display = "none";
        main.classList.remove("freeze");
        sidenav.style.display = "none";  
        overlay.style.display = "none";
        body.classList.remove("hideme");

    };
}
