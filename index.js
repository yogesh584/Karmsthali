let login = document.getElementById("login");
if (login) {
    login.addEventListener("click", () => {
        let loginform = document.getElementsByClassName("loginform");
        loginform[0].classList.toggle("LoginActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

let cancle = document.getElementById("cancle");
if (cancle) {
    cancle.addEventListener("click", () => {
        let loginform = document.getElementsByClassName("loginform");
        loginform[0].classList.toggle("LoginActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

let signup = document.getElementById("signup");
if (signup) {
    signup.addEventListener("click", () => {
        let signupform = document.getElementsByClassName("signupform");
        signupform[0].classList.toggle("signupActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}

let canclesignUpBtn = document.getElementById("canclesignUpBtn");
if (canclesignUpBtn) {
    canclesignUpBtn.addEventListener("click", () => {
        let signupform = document.getElementsByClassName("signupform");
        signupform[0].classList.toggle("signupActive");
        let container = document.getElementsByClassName("container");
        container[0].classList.toggle("containerActive");
    });
}


let myalert = document.getElementById("alert");

if (myalert) {
    let alertCancleBtn = document.getElementById("alertCancleBtn");
    alertCancleBtn.addEventListener("click",()=>{
        console.log('This is working');
        
        myalert.style.top = "-40px";
    })
}

let teacher = document.getElementsByClassName("teacher");

function teacherScrolling(){
    console.log('scroling');
    
    for(let teacherElt of teacher){
        teacherElt.style.marginLeft = "-350px";
    }
}

setInterval(teacherScrolling, 3000);