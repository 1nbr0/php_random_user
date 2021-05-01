var btnPopin = document.getElementById('btnPopin');
var overlay = document.getElementById('overlay');
var btnClose = document.getElementById('btnClose');

var btnPopinMore = document.getElementById('btnPopinMore');

btnPopin.addEventListener('click', openModal);

btnClose.addEventListener('click',closePopin);

btnPopinMore.addEventListener('click', openMore);

function openModal(){
    overlay.style.display = 'block';  // cette fonction permet d'afficher la popin, au moment du click sur le bouton, en modiffiant le style css "display" qui est en 'none' par default en 'block'.
}

function closePopin(){
    overlay.style.display = 'none'; // cette fonction permet de fermer la popin au moment du click sur la croix, et de recharger la page
    location.reload();
}

function openMore(){
    popinMore.style.display = 'block'; // cette fonction fonctionne comme la fonction openModal mais au moment du click sur "voir plus"
}