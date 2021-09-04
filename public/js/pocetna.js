let korpaText = document.querySelector('.korpa-text');
let korpaCena = document.querySelector('.korpa-cena');

let ukupnaCena = parseInt(korpaCena.innerText);

if(ukupnaCena > 0) {
    korpaText.innerText = 'Zavržetak kupovine';
} else {
    korpaText.innerText = 'Popunite korpu';
}
