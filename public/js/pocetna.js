let korpaText = document.querySelector('.korpa-text');
let korpaCena = document.querySelector('.korpa-cena');

let ukupnaCena = parseInt(korpaCena.innerText);

if(isNaN(ukupnaCena)) {
    ukupnaCena = 0;
    korpaCena.innerText = 0;
}

if(ukupnaCena > 0) {
    korpaText.innerText = 'Zavržetak kupovine';
} else {
    korpaText.innerText = 'Popunite korpu';
}
