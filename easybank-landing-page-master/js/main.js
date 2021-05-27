function myFunc() {
    document.getElementById("mydropdown").classList.toggle("show");

    if (document.getElementById("mydropdown").classList.contains("show") == false) {
        document.getElementById("menu-sign").setAttribute("src", "images/icon-hamburger.svg");
        
    } else {
        document.getElementById("menu-sign").setAttribute("src", "images/icon-close.svg");
    }
    
}