//alert("Hello world");


let Boxlayout = (function () {
    let wrapper = document.body,
        sgroups = Array.from(document.querySelectorAll(".sgroup")),
        closeButtons = Array.from(document.querySelectorAll(".close-sgroup")),
        expandedClass = "is-expanded",
        hasExpandedClass = "has-expanded-item";
    return { init: init };
    function init() {
        _initEvents();
    }
    function _initEvents() {
        sgroups.forEach(function (element) {
            element.onclick = function () {
                _opensgroup(this);
            };
        });
        closeButtons.forEach(function (element) {
            element.onclick = function (element) {
                element.stopPropagation();
                _closesgroup(this.parentElement);
            };
        });
    }
    function _opensgroup(element) {
        if (!element.classList.contains(expandedClass)) {
            element.classList.add(expandedClass);
            wrapper.classList.add(hasExpandedClass);
        }
    }
    function _closesgroup(element) {
        if (element.classList.contains(expandedClass)) {
            element.classList.remove(expandedClass);
            wrapper.classList.remove(hasExpandedClass);
        }
    }
})();
Boxlayout.init();



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
//---------------------------------Menu section starting---------------------------------
$(".navmenu_2 a").on("click", function() {
    let position = $(this)
        .parent()
        .position();
    let width = $(this)
        .parent()
        .width();
    $(".navmenu_2 .slide1").css({ opacity: 1, left: +position.left, width: width });
});
$(".navmenu_2 a").on("mouseover", function() {
    let position = $(this)
        .parent()
        .position();
    let width = $(this)
        .parent()
        .width();
    $(".navmenu_2 .slide2")
        .css({
            opacity: 1,
            left: +position.left,
            width: width
        })
        .addClass("squeeze");
});
$(".navmenu_2 a").on("mouseout", function() {
    $(".navmenu_2 .slide2")
        .css({ opacity: 0 })
        .removeClass("squeeze");
});
let currentWidth = $(".navmenu_2")
    .find(".active")
    .parent("li")
    .width();
let current = $(".navmenu_2 .active").position();
$(".navmenu_2 .slide1").css({ left: +current.left, width: currentWidth });
//---------------------------------Menu section ending-----------------------------------