    const x = document.getElementById("passWord");
    const y = document.getElementById("userName");
    const z = document.getElementById("toggle");
    const show = document.querySelector(".fm-text");
    const width = 505;

    function myFunction() {    
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password"
        }

        if (x.type === "password") {
            z.innerHTML = "SHOW";
        } else if (x.type === "text") {
            z.innerHTML = "HIDE";
        }
    }
    function display() {
        if (innerWidth < width) {
            if (x.value === "") {
                show.style.display = "none"
            } else if (x.value.length >= 1) {
                show.style.display = "block"
            }
            y.placeholder = "Mobile number or Email address"
        } else {
            if (x.value === "" || x.value.length >= 1) {
                show.style.display = "none"
            }
            y.placeholder = "Email address or phone number"
        }
    }

    function toggler() {
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password"
        }
    
        if (x.type === "password") {
            y.classList.remove("fa-eye");
            y.classList.add("fa-eye-slash");
        } else {
            y.classList.remove("fa-eye-slash");
            y.classList.add("fa-eye");
        }
    }
    
    setInterval(display, 1);