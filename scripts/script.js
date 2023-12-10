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

window.addEventListener('load', function () {
    const buttons = document.querySelectorAll('.size_button');
  
    buttons.forEach(function(button) {
        button.addEventListener('click', function () {
            buttons.forEach(function(otherButton) {
                if (otherButton !== button) {
                    otherButton.classList.remove('active');
                }
            })
            this.classList.toggle('active');
            selectedSize = this.id;
        });
    });
});

/* ---------- Slideshow ---------- */
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Zmień 2000 na czas wyświetlania jednego slajdu w milisekundach (tutaj ustawione na 2 sekundy)
}
