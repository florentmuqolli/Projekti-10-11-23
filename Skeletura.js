const lgforma = document.querySelector('.lgforma');
const loginlinki = document.querySelector('.login-link');
const registerlinki = document.querySelector('.register-link');
const Kycja = document.querySelector('.kycja');
const HekenX = document.querySelector('.hekenX');

registerlinki.addEventListener('click', ()=>
{
    lgforma.classList.add('active');
});

loginlinki.addEventListener('click', ()=>
{
    lgforma.classList.remove('active');
});

Kycja.addEventListener('click', ()=>
{
    lgforma.classList.add('active-kycja');
});

HekenX.addEventListener('click', ()=>
{
    lgforma.classList.remove('active-kycja');
});