var btnPopin = document.getElementById('btnPopin');
var overlay = document.getElementById('overlay');
var btnClose = document.getElementById('btnClose');
var btnPopinMore = document.getElementById('btnPopinMore');

btnPopin.addEventListener('click', openModal);

btnClose.addEventListener('click',closePopin);

btnPopinMore.addEventListener('click', openMore);

function openModal(){
    overlay.style.display = 'block';
}

function closePopin(){
    overlay.style.display = 'none';
}

function openMore(){
    popinMore.style.display = 'block';
}