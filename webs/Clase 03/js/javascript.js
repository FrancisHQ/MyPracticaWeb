// SCRIPT DEL PRELOADER
let preloader=document.getElementById("preloader");
setTimeout(function(){
    preloader.style.opacity="1";
    preloader.style.opacity="0.5";
    preloader.style.visibility="hidden";
},2000)
// SCRIPT DEL MENU HAMBURGUESA
function llamar(){
    let botonera=document.getElementById("botonera");
        botonera.classList.toggle("botonera-open");
    let menu=document.getElementById("menu");
        menu.querySelector(".menu .burger").classList.toggle("fa-xmark");
}
// SCRIPT DEL SCROLL SUBIR
let subir=document.getElementById("subir");
window.addEventListener("scroll", Scroll);
function Scroll() {
    let posy = window.pageYOffset; // POSY ES POSICION EN Y.
    if(posy>100){
        subir.style.display="block";
    }
    else{
        subir.style.display="none";
    }
}
// SCRIPT DEL HEADER
window.addEventListener("scroll", Bajar);
function Bajar() {
    let header=document.getElementById("header");
    ejey=window.pageYOffset;
    if(ejey>300){
        header.style.background="darkblue";
        header.style.transition="0.5s";
    }
    else{
        header.style.background="none";
        header.style.transition="0.5s";
    }
}
// SCRIPT DE GALERIA
let num=1;
function adelante() {
    num++;
    if(num>12)
    num=1;
let img=document.getElementById("img");
img.src="img/"+"img0"+num+".jpg";
}
function atras() {
    num--;
    if(num<1)
    num=12;
let img=document.getElementById("img");
img.src="img/"+"img0"+num+".jpg";
}