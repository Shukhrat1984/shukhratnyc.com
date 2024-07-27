//alert("Hello world");

//-------------------------------------------------------------------

//-------------------------------------------------------------------


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
//---------------------------------Menu section ending---------------------------------
