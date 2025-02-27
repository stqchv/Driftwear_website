/* ---------- Scroll navbar ---------- */
const body = document.body;
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset
            
    if (currentScroll <= 0) {
        body.classList.remove("scroll-up")
    }

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up")
        body.classList.add("scroll-down")
    }

    if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-down")
                body.classList.add("scroll-up")
    }

    lastScroll = currentScroll;
})

/* ---------- Pop-up animations ---------- */
window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i = 0; i < reveals.length; i++){
        
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop <windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}

window.addEventListener('scroll', reveal2);

function reveal2(){
    var reveals = document.querySelectorAll('.reveal2');

    for(var i = 0; i < reveals.length; i++){
        
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop <windowheight - revealpoint){
            reveals[i].classList.add('active2');
        }
        else{
            reveals[i].classList.remove('active2');
        }
    }
}

/* ---------- Scroll to section ---------- */

function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: "smooth" });
}

/* ---------- Parallax effect ---------- */

const layers = document.querySelectorAll('.parallax-effect');

window.addEventListener('scroll', (e) => {
    layers.forEach(layer => {
        const depth = layer.getAttribute('data-depth');
        const movement = -(window.scrollY * depth);
        const translate3d = `translate3d(0, ${movement}px, 0)`;
        layer.style.transform = translate3d;
    });
});

/* ---------- Size selector ---------- */

document.addEventListener('DOMContentLoaded', function () {
    const selectedSizeInput = document.getElementById('selected_size');
    const buttons = document.querySelectorAll('.size_button');

    buttons.forEach(function(button) {
        button.addEventListener('click', function () {
            buttons.forEach(function(otherButton) {
                if (otherButton !== button) {
                    otherButton.classList.remove('active');
                }
            });

            this.classList.toggle('active');
            selectedSize = this.id;
            selectedSizeInput.value = selectedSize;
        });
    });
});

/* ---------- SlideShow ---------- */

const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");
let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
const showHideIcons = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}
arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14;
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60);
    });
});
const autoSlide = () => {
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
    positionDiff = Math.abs(positionDiff);
    let firstImgWidth = firstImg.clientWidth + 14;
    let valDifference = firstImgWidth - positionDiff;
    if(carousel.scrollLeft > prevScrollLeft) {
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}
const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}
const dragging = (e) => {
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}
const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);
document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);

/* ---------- Checking for discount code ---------- */

function checkDiscoundCode() {
    var discountCode = document.getElementById("discount-code").value;
    var resultMessageElement = document.getElementById('result-message');

    if (discountCode === 'POLSL<3' || discountCode === 'W1NTER2023') {
        resultMessageElement.innerHTML = '&#10004;';
    }
    else {
        resultMessageElement.innerHTML = '&#10008;';
    }
}
