
//--------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------

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