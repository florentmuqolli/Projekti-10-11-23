const boxi = document.querySelector('.boxi');
const loginlinki = document.querySelector('.loginlinki');
const registerlinki = document.querySelector('.reglinki');
const logininheader = document.querySelector('.kycja');
const HekenX = document.querySelector('.hekenX');

registerlinki.addEventListener('click', ()=>
{
    boxi.classList.add('active');
});

loginlinki.addEventListener('click', ()=>
{
    boxi.classList.remove('active');
});

logininheader.addEventListener('click', ()=>
{
    boxi.classList.add('active-kycja');
});

HekenX.addEventListener('click', ()=>
{
    boxi.classList.remove('active-kycja');
});

let nameRegex = /^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
let emailRegex= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
let passwordRegex= /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

function kyciratu() {
    let emailError=document.getElementById('emailgabim');
    let emailInput = document.getElementById('email');
    let passwordInput=document.getElementById('passi');
    let passwordError = document.getElementById('passigabim');

    emailError.innerText = '';
    passwordError.innerText = '';

    if(!emailRegex.test(emailInput.value)) {
        emailError.innerText='Invalid email';
        return;
    }

    if(!passwordRegex.test(passwordInput.value)) {
        passwordError.innerText='Invalid password';
        return;
    }
    else
    {
        alert('Logging you in :)');
        window.location = "http://localhost:8008/Projekti-10-11-23/skeletura-main.php";
    }
}

function registeratu() {
    let emailError=document.getElementById('emailgabimr');
    let emailInput = document.getElementById('emailr');
    let passwordInput=document.getElementById('passir');
    let passwordError = document.getElementById('passigabimr');
    let emriError = document.getElementById('emrigabim');
    let emriInput = document.getElementById('emri');

    emailError.innerText = '';
    passwordError.innerText = '';
    emriError.innerText = '';

    if(!nameRegex.test(emriInput.value))
    {
        emriError.innerText='This username is not allowed';
        return;
    }

    if(!emailRegex.test(emailInput.value)) {
        emailError.innerText='Invalid email';
        return;
    }

    if(!passwordRegex.test(passwordInput.value)) {
        passwordError.innerText='Invalid password';
        return;
    }
    else
    {
        alert('Your data has been saved. Registering you :)');
        window.location = "http://localhost:8008/Projekti-10-11-23/skeletura-main.php";
    }
}

