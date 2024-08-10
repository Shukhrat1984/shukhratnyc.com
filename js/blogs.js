//alert("Hello world");
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
//-----------------ANIMATED TRANSITION BETWEEN PAGES section starting------------------
$(window).on('load pageshow', function () {
    $('.preloader').removeClass("off");
    $('.preloader').addClass("on");
});
$("a:not([href*=javascript]):not([href*=\\#]):not(.fancybox):not([target]):not([data-fancybox])").click(function() {
    $('.preloader').removeClass("on");
    $('.preloader').addClass("off");
    let url = $(this).attr('href');
    window.setTimeout(function() {
        window.location.href = url;
    }, 550);
    return false;
});
//----------------ANIMATED TRANSITION BETWEEN PAGES section starting---------------------

