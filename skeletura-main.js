const boxii = document.querySelector('.boxii');
const kontakt = document.querySelector('.kontaktona');
const hekenXX = document.querySelector('.hekenXX');

kontakt.addEventListener('click', ()=>
{
    boxii.classList.add('active-kontaktona');
});
hekenXX.addEventListener('click', ()=>
{
    boxii.classList.remove('active-kontaktona');
});