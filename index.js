//! Working on Header
//todo : After scrolling what will happens with header is written here

let header = document.getElementById("header");
if (header) {
    window.addEventListener("scroll", () => {
        header.classList.toggle("sticky", window.scrollY > 0);
    });
}

//! Working on Login Button
//todo : After clicking in Login Button we will add a class name LoginActive and the Styling of this class is in index.css file

let login = document.getElementById("login");
if (login) {
    login.addEventListener("click", () => {
        let loginform = document.getElementsByClassName("loginform");
        loginform[0].classList.toggle("LoginActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

//! Working on Cancle Button of Login Form
//todo : After clicking in Cancle Button we will remove a class name LoginActive

let cancle = document.getElementById("cancle");
if (cancle) {
    cancle.addEventListener("click", () => {
        let loginform = document.getElementsByClassName("loginform");
        loginform[0].classList.toggle("LoginActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

//! Working on SignUp Button
//todo : After clicking in Signup Button we will add a class name signupActive and the Styling of this class is in index.css file

let signup = document.getElementById("signup");
if (signup) {
    signup.addEventListener("click", () => {
        let signupform = document.getElementsByClassName("signupform");
        signupform[0].classList.toggle("signupActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

//! Working on Cancle Button of Signup form
//todo : After clicking in Cancle Button we will remove a class name signupActive

let canclesignUpBtn = document.getElementById("canclesignUpBtn");
if (canclesignUpBtn) {
    canclesignUpBtn.addEventListener("click", () => {
        let signupform = document.getElementsByClassName("signupform");
        signupform[0].classList.toggle("signupActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

//! Work on All Alerts
//todo : After clicking Cross Button of Alert we will remove Alert

let myalert = document.getElementById("alert");

if (myalert) {
    let alertCancleBtn = document.getElementById("alertCancleBtn");
    alertCancleBtn.addEventListener("click", () => {
        myalert.style.top = "-40px";
    });
}

//! Work on Teachers Slider
//todo : First we will all teacher divs and we are sliding only frist div (0th div) and other div automaticaly slide. As you already know that we have four teacher divs on screen and we just want that after complete sliding frist div will automaticly come to his normal position and to do that we just set the value of increment to 0 and to find what is right time to stop slider we just multiple or teacher array length as shown in code --- >

const teacher = document.getElementsByClassName("teacher");
let increment = -370;
let stopIncrement = 4;
let multiple = 1;
function TeachersSlider() {
    teacher[0].style.marginLeft = `${increment}px`;
    increment -= 370;
    stopIncrement++;
    console.log(stopIncrement);
    if (stopIncrement == multiple * (teacher.length - 3)) {
        increment = 0;
        multiple++;
    }
    console.log("The multiple is : " + multiple * (teacher.length - 4));
}
setInterval(TeachersSlider, 2000);
