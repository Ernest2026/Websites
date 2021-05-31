var menuIcon = document.getElementById("menu");
var logo = document.getElementById("logo");
var nav = document.getElementById("nav");
var navText = document.getElementById("nav-text");
var empty = document.getElementById("empty");
var blur = document.getElementById("blur");

function myFunction(x) {
    if (x.matches) {
        remove();
    } else {
        
    }
  }
  
  var x = window.matchMedia("(min-width: 900px)")
  myFunction(x)
  x.addListener(myFunction)

function toggleNav() {

    logo.classList.toggle("hide");
    nav.classList.toggle("bg-white");
    navText.classList.toggle("show");
    empty.classList.toggle("show");
    blur.classList.toggle("blur");

    if (navText.classList.contains("show") == false) {
        menuIcon.setAttribute("src", "images/icon-hamburger.svg");
    } else {
        menuIcon.setAttribute("src", "images/icon-close.svg");
    }
}

function remove() {
    logo.classList.remove("hide");
    nav.classList.remove("bg-white");
    navText.classList.remove("show");
    empty.classList.remove("show")
    blur.classList.remove("blur");
    menuIcon.setAttribute("src", "images/icon-hamburger.svg");
}


var slideIndex = 1;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var background = document.getElementById("bgSlides");
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    console.log(slides.length)
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        // background.classList.remove("bg-" + [i]);
    }
    slides[slideIndex-1].style.display = "block";
    // background.classList.add("bg-" + [slideIndex]);


    switch (slideIndex) {
        case 1:
            background.classList.add("bg-1");
            background.classList.remove("bg-2");
            background.classList.remove("bg-3");
            break;
        case 2:
            background.classList.add("bg-2");
            background.classList.remove("bg-3");
            background.classList.remove("bg-1");
            break;

        case 3:
            background.classList.add("bg-3");
            background.classList.remove("bg-1");
            background.classList.remove("bg-2")
            break;
    
        default:
            break;
    }
    console.log("bg-" + [slideIndex]);
}

document.getElementById("link").addEventListener("mouseover", hover);
document.getElementById("link").addEventListener("mouseout", notHover);

function hover(){ 
    document.getElementById("arrow").classList.add("opacity");
    document.getElementById("link").classList.add("opacity");
 }

 function notHover(){ 
    document.getElementById("arrow").classList.remove("opacity");
    document.getElementById("link").classList.remove("opacity");
 }