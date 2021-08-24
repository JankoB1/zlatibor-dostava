// let podaciZaNarucivanje;
//
// function inicijalizujPodatkeZaNarucivanje(podaci){
//     podaciZaNarucivanje = JSON.parse(podaci);
//     console.log(podaciZaNarucivanje);
// }

let ukupnaCena = 0;

let korpaText = document.querySelector('.korpa-text');
let korpaCena = document.querySelector('.korpa-cena');

let dodajUKorpuBtns = document.querySelectorAll('.dodaj-u-korpu-btn');
let dodajUKorpuBtnsArr = [...dodajUKorpuBtns];


dodajUKorpuBtnsArr.forEach((btn) => {

    btn.addEventListener('click', function () {
        let forma = btn.parentElement;
        let proizvodContent = forma.parentElement;
        let nazivProizvoda = proizvodContent.querySelector('.proizvod-title');

        let vrsteVarijacija = forma.querySelectorAll('.varijacija-naziv');
        for(i = 0; i < vrsteVarijacija.length; i++) {
            let izbori = forma.querySelectorAll('input[name=' + vrsteVarijacija[i].innerText + ']');
            for(j = 0; j < izbori.length; j++) {
                if(izbori[j].checked) {
                    ukupnaCena += parseInt(izbori[j].value);
                }
            }
        }

        korpaCena.innerHTML = ukupnaCena;
    });
});
