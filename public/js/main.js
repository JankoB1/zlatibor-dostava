let sirinaUredjaja = window.innerWidth;

let adresaCont = document.querySelector('.adresa-container');
let imaAdresa = 0;

if(adresaCont) {
    imaAdresa = 1;
}

let colPrva = document.querySelector('.col-lg-6.prva');
let sliderCont = document.querySelector('.slider-cont');
let textPocetna = document.querySelector('.text-i-adresa-container h4');
let pocetnaSlika = document.querySelector('.pocetna-slika');
let slikaKorpa = document.querySelector('.slika-korpa img');
let rowTop = document.querySelector('.row-top');
let arrowDown = document.querySelector('.arrow-down');
let promeniAdresuSpan = document.querySelector('.promeni-adresu-link span');
let colsLg = document.querySelectorAll('.col-lg-6');

if(!imaAdresa) {
    if(colPrva) {
        colPrva.style.display = 'none';
    }
    if(sliderCont) {
        sliderCont.setAttribute('style', 'top: 0 !important');
    }
    if(textPocetna) {
        textPocetna.style.marginTop = '20px';
    }
    if(pocetnaSlika) {
        pocetnaSlika.style.marginTop = '0';
    }
    if(slikaKorpa) {
        slikaKorpa.style.marginTop = '0';
    }
    if(window.innerWidth > 620) {
        colsLg.forEach((col) => {
            col.style.left = '36%';
        });
    }
} else {
    if(arrowDown) {
        arrowDown.addEventListener('click', function () {
            promeniAdresuSpan.classList.toggle('active');
            arrowDown.classList.toggle('open');
        });
    }
    if(slikaKorpa) {
        rowTop.style.marginTop = '20px';
    }
}
