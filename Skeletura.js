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


let emailRegex= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
let passwordRegex= /^[a-zA-Z]\w{3,14}$/;

function validateForm() {
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

    alert('Succesfully');
}

