// alert("This website contains sound!!!");

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

//-------------------- Vertical accordion for images section starting-------------------
const panels = document.querySelectorAll('.panel');
panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses();
        panel.classList.add('active');
    });
});

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active');
    });
}

//-------------------- Vertical accordion for images section ending---------------------

//-------------------- Style for bubble-content section starting------------------------
const clip = (v, min, max = Infinity) => {
    if (v < min) return min;
    else if (v > max) return max;
    else return v;
};
const randRange = (min, max) => Math.random() * max + min;

function bubble(x, y, rect, hue, target) {
    const size = randRange(20, rect.width / 10);
    const circleHue = hue + randRange(-20, 20);
    const animDuration = randRange(clip(size ** 2 / 1000, 1), 6)
    const zIndex = Math.random() < 0.1 ? 2 : -1;
    const circle = document.createElement("span");
    circle.className = "bubble";
    circle.style.left = x + "px";
    circle.style.top = y + "px";
    circle.style.width = size + "px";
    circle.style.height = size + "px";
    circle.style.background = `hsl(${circleHue}deg, 100%, 60%)`;
    circle.style.zIndex = zIndex.toString(); // Преобразование числа в строку
    circle.style.animationDuration = animDuration + "s";
    target.appendChild(circle);
}

function bubblestart() {
    document.querySelectorAll("[data-bubble-hue]").forEach((target) => {
        const rect = target.getBoundingClientRect();
        const hue = Number(target.getAttribute("data-bubble-hue"));
        const count = Number(target.getAttribute("data-bubble-count") || 50);
        for (let i = 0; i < count; i++) {
            const x = randRange(0, rect.width);
            const y = randRange(0, rect.height);
            bubble(x, y, rect, hue, target);
        }
    });
}

window.addEventListener("resize", () => {
    let del = document.querySelectorAll(".bubble");
    del.forEach(e => e.remove());
    bubblestart();
});
bubblestart();
//-------------------- Style for bubble-content section ending------------------------

//-------------------- Style for grid with percentages section starting------------------------
// Функция для запуска анимации одометров
function startOdometerAnimation() {
    let odometerElements = document.querySelectorAll('.odometer');

    odometerElements.forEach(function (element) {
        let targetValue = parseInt(element.getAttribute('data-count'));
        let odometer = new Odometer({
            el: element,
            value: 0,
            format: '(,ddd)',
            duration: 10000  // Длительность анимации
        });

        function updateOdometer() { //Функция updateOdometer обновляет одометр до целевого значения, затем через секунду сбрасывает его до 0 и снова запускает анимацию через секунду.
            odometer.update(targetValue); // Обновляем до целевого значения
            setTimeout(() => {
                odometer.update(0); // Сбрасываем до 0
                setTimeout(updateOdometer, 5000); // Запускаем снова через 1 секунду
            }, 5000);
        }

        updateOdometer();
    });
}

startOdometerAnimation();
//-------------------- Style for grid with percentages section ending------------------------

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
