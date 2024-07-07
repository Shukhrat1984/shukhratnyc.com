
//-------------------------About social media section starting--------------------------
const contact_btn = document.querySelector('.contact-btn');
const close_btn = document.querySelector('.close-btn');
const contact_container = document.querySelector('.contact-container');
contact_btn.addEventListener('click', () => {
    contact_container.classList.toggle('visible')
});
close_btn.addEventListener('click', () => {
    contact_container.classList.remove('visible')
});
//--------------------------About social media section ending---------------------------

//-----------------------------Up button section starting-------------------------------
$('body').append('<div class="up_btn"></div>');
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.up_btn').css({
            bottom: '15px'
        });
    } else {
        $('.up_btn').css({
            bottom: '-80px'
        });
    }
});
$('.up_btn').on('click', function () {
    $('html, body').animate({
        scrollTop: 0
    }, 500);
    return false;
});
//----------------------------Up button section ending----------------------------------

//--------------------------About my brain section starting-------------------------------
function addClass(query, theClass) {
    let x = document.querySelectorAll(query);
    for (let i = 0; i < x.length; i++) {
        x[i].classList.add(theClass);
    }
}
function randNum(from, to) {
    return Math.floor(Math.random() * (to - from + 1) + from);
}
function animateSVGs() {
    let allPaths = document.querySelectorAll(".brain path");
    for (let i = 0; i < allPaths.length; i++) {
        let lineLength = allPaths[i].getTotalLength();
        allPaths[i].style.strokeDasharray = lineLength;
        allPaths[i].style.strokeDashoffset = lineLength;
        allPaths[i].style.animationDelay = randNum(-50, 50) / 10 + "s";
    }
    let allRects = document.querySelectorAll("rect");
    for (let i = 0; i < allRects.length; i++) {
        allRects[i].style.animationDelay = randNum(-50, 50) / 10 + "s";
    }
    let allCircles = document.querySelectorAll("circle");
    for (let i = 0; i < allCircles.length; i++) {
        allCircles[i].style.animationDelay = randNum(-50, 50) / 10 + "s";
    }
    let allEllipses = document.querySelectorAll("ellipse");
    for (let i = 0; i < allEllipses.length; i++) {
        allEllipses[i].style.animationDelay = randNum(-50, 50) / 10 + "s";
    }
}
function neuralize() {
    animateSVGs();
    addClass(".brain path", "animatePaths");
    addClass(".brain rect", "animateRects");
    addClass(".brain circle", "animateCircles");
    addClass(".brain ellipse", "animateEllipse");
}
neuralize();
//--------------------------About my brain section ending-------------------------------

//----------------------Progress-bar-scroll section starting----------------------------
const progressBarEl = document.getElementById("progress-bar");

window.addEventListener("scroll", () => {
    let height = document.body.scrollHeight - window.innerHeight;
    let scrollPosition = document.documentElement.scrollTop;
    let width = (scrollPosition / height) * 100;
    progressBarEl.style.width = `${width}%`;
});
// Telegram channel @FrontendPortal
//----------------------Progress-bar-scroll section ending----------------------------

//-------------------- Audio or sound main menu section starting-------------------------------
function addHoverSound(selector, soundId) {
    document.querySelectorAll(selector).forEach(item => {
        item.addEventListener('mouseenter', () => {
            document.getElementById(soundId).play();
        });
    });
}

addHoverSound('.logo-brand', 'hover-sound1');
addHoverSound('.nav-link', 'hover-sound2');
addHoverSound('.dropdown-item', 'hover-sound3');
addHoverSound('.btn-outline-primary', 'hover-sound4');
//--------------------- Audio or sound main menu section ending-------------------------------