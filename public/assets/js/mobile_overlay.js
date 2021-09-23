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
        body.classList.add("lock");
        $('.navbar_burger').addClass('navbar_burger_left');


    } else {
        console.log("no");

        for (let i = 0; i < burger.length; i = i + 1) {
            console.log(burger[i]);
            burger[i].classList.remove("is-active");
        }

       
        overlay.style.display = "none";
        sidenav.style.display = "none";  
        body.classList.remove("hideme");
        body.classList.remove("lock");
        $('.navbar_burger').removeClass('navbar_burger_left');
    }
};

$( document ).ready(function() {
    if(Modernizr.mq('screen and (max-width: 767.98px)')) {
        $('li a[href*="#"]').on("click", (function() {
            sidenav.style.display = "none";
            overlay.style.display = "none";
            body.classList.remove("lock");
            $('.hamburger').removeClass('is-active');
            $('.navbar_burger').removeClass('navbar_burger_left');
            switchToggle = !switchToggle;
        })); 
    }
    
});


$('.button_info_accept').bind('click', function() {
    console.log('test');
    $(this).closest('.code_text_ctn').siblings('.code_info').show();
});

$('.button_info_cancel').bind('click', function() {
    console.log('test2');
    $(this).closest('.code_info').hide();
});


