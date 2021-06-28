// ===== Nav toggle =====
document.querySelector(".icon").addEventListener("click", function () {
    document.getElementById("dropdown").classList.toggle("show");

    if (document.getElementById("dropdown").classList.contains("show") == false) {
        document.getElementById("icon").setAttribute("src", "images/icon-hamburger.svg");
    } else {
        document.getElementById("icon").setAttribute("src", "images/icon-close.svg");
    }

});


  // ===== Email Validation =====
  function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function validate() {
      const errMsg = document.querySelector(".error-msg");
      const email = document.getElementById("email").value;
      
      if (validateEmail(email)) {
          if (errMsg.innerHTML !== "") {
              errMsg.innerHTML = "";
          }
      } else {
        document.querySelector('input[type=text]').style.setProperty("--c", "red");
          errMsg.innerHTML = "Please insert a valid email";
      }
      return false;
  }

  document.getElementById("validate").addEventListener("click", validate);



// ===== Animation on Scroll =====
/* var o = 0;
var show = document.querySelectorAll(".remove-class");

for (o = 0; o < show.length; o++) {
    document.querySelectorAll(".remove-class")[o].classList.remove("opacity");
}


var scroll = window.requestAnimationFrame ||

function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 

function loop() {

Array.prototype.forEach.call(elementsToShow, function(element){
if (isElementInViewport(element)) {
element.classList.add('is-visible');
} else {
element.classList.remove('is-visible');
}
});

scroll(loop);
}

loop();

function isElementInViewport(el) {

if (typeof jQuery === "function" && el instanceof jQuery) {
el = el[0];
}
var rect = el.getBoundingClientRect();
return (
(rect.top <= 0
&& rect.bottom >= 0)
||
(rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
rect.top <= (window.innerHeight || document.documentElement.clientHeight))
||
(rect.top >= 0 &&
rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
);
} */



// ===== Slideshow =====
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("circle");
    var x = window.matchMedia("(max-width: 899px)")
    
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }

    if (x.matches) {
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
      } else {
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "block";
            }
            slides[slideIndex-1].style.display = "none";
      }

      x.addListener(showSlides);
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000);
}
