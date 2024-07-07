// alert("This website contains sound!!!");

//------------------------------------------------------
//------------------------------------------------------


//---------------------------Carousel-3d section starting---------------------------
window.addEventListener("load", () => {
    let carousels = document.querySelectorAll(".carousel-3d");
    for (let i = 0; i < carousels.length; i++) {
        carousel(carousels[i]);
    }
});

function carousel(root) {
    let figure = root.querySelector("figure"),
        nav = root.querySelector("nav"),
        images = figure.children,
        n = images.length,
        gap = root.dataset.gap || 0,
        bfc = "bfc" in root.dataset,
        theta = 2 * Math.PI / n,
        currImage = 0;
    setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
    window.addEventListener("resize", () => {
        setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
    });
    setupNavigation();

    function setupCarousel(n, s) {
        let apothem = s / (2 * Math.tan(Math.PI / n));
        figure.style.transformOrigin = `50% 50% ${-apothem}px`;
        for (let i = 0; i < n; i++) images[i].style.padding = `0 ${gap}px`;
        for (i = 0; i < n; i++) {
            images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
            images[i].style.transform = `rotateY(${i * theta}rad)`;
        }
        if (bfc)
            for (i = 0; i < n; i++) images[i].style.backfaceVisibility = "hidden";
        rotateCarousel(currImage);
    }

    function setupNavigation() {
        nav.addEventListener("click", onClick, true);

        function onClick(e) {
            e.stopPropagation();
            let t = e.target;
            if (t.tagName.toUpperCase() != "BUTTON") return;
            if (t.classList.contains("next")) {
                currImage++;
            } else {
                currImage--;
            }
            rotateCarousel(currImage);
        }
    }

    function rotateCarousel(imageIndex) {
        figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
    }

    let xClick;
    let mouseDown;
    /* Смена слайдов мышкой */
    figure.onmousedown = (event) => {
        xClick = event.pageX;
        mouseDown = true;
    };
    figure.onmouseup = (event) => {
        mouseDown = false;
    };
    figure.onmousemove = (event) => {
        if (mouseDown) {
            let xMove = event.pageX;
            if (Math.floor(xClick - xMove) > 5) {
                currImage++;
                rotateCarousel(currImage);
                mouseDown = false;
            } else if (Math.floor(xClick - xMove) < -5) {
                currImage--;
                rotateCarousel(currImage);
                mouseDown = false;
            }
        }
    };
    /* Смена слайдов пальцем */
    figure.ontouchstart = (event) => {
        xClick = event.changedTouches[0].pageX;
        mouseDown = true;
    };
    figure.ontouchend = (event) => {
        mouseDown = false;
    };
    figure.ontouchmove = (event) => {
        if (mouseDown) {
            let xMove = event.changedTouches[0].pageX;
            if (Math.floor(xClick - xMove) > 5) {
                currImage++;
                rotateCarousel(currImage);
                mouseDown = false;
            } else if (Math.floor(xClick - xMove) < -5) {
                currImage--;
                rotateCarousel(currImage);
                mouseDown = false;
            }
        }
    };
}

//----------------------------Carousel-3d section ending----------------------------

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