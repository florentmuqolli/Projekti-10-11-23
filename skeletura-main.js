const boxii = document.querySelector('.boxii');
const kontakt = document.querySelector('.kontaktona');
const hekenXX = document.querySelector('.hekenXX');
const footer = document.querySelector('.footeri');
const about = document.querySelector('.tefooteri');

kontakt.addEventListener('click', ()=>
{
    boxii.classList.add('active-kontaktona');
});
hekenXX.addEventListener('click', ()=>
{
    boxii.classList.remove('active-kontaktona');
});

about.addEventListener('click', ()=>
{
    footer.classList.add('active-footeri');
});