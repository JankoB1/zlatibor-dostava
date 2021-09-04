// UKLONI PROIZVOD IZ KORPE

let ukloniBtns = document.querySelectorAll('.ukloni');
let ukloniBtnsArr = [...ukloniBtns];

let ukupnaCenaText = document.querySelector('.ukupna-cena');
let ukupnaCena = parseInt(document.querySelector('.ukupna-cena').innerText);

let korpaText = document.querySelector('.korpa-text');
korpaText.innerText = 'Klikni da bi poručio/la';

ukloniBtnsArr.forEach((btn) => {
    btn.addEventListener('click', function (e) {

        let tabelaTd = btn.parentElement;
        let tabelaTr = tabelaTd.parentElement;
        let nazivProizvoda = tabelaTr.querySelector('.proizvod-korpa-title').innerHTML;
        let cena = parseInt(tabelaTr.querySelector('.td-cena').innerHTML);

        ukupnaCena -= cena;
        ukupnaCenaText.innerHTML = ukupnaCena;
        tabelaTr.parentElement.removeChild(tabelaTr);

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        jQuery.ajax({
            url: window.location.origin + '/ukloni/' + nazivProizvoda,
            method: 'get',
            data: {
                naziv: nazivProizvoda,
            },
            success: function (result) {
                console.log('Success');
            }
        });

    });
});

// REDIREKCIJA PORUDZBINE

let btnContainer = document.querySelector('.korpa-container');
if (window.location.href.indexOf("porudzbina") != -1) {
    btnContainer.innerHTML = '<a href="http://127.0.0.1:8000/vrati-na-pocetnu">' +
        '<p class="korpa-text">Vrati se na početnu stranicu</p>' +
        '<a/>';
}

//POVECAJ ZA 1

// let povecajBtns = document.querySelectorAll('.dodaj-korpa');
// let povecajBtnsArr = [...povecajBtns];
//
// povecajBtnsArr.forEach((btn) => {
//     btn.addEventListener('click', function (e) {
//
//         let proizvodContainer = btn.parentElement;
//         let nazivProizvoda = proizvodContainer.querySelector('.proizvod-korpa-title').innerHTML;
//         let cena = parseInt(proizvodContainer.querySelector('.proizvod-korpa-cena').innerHTML);
//         let brojProizvodaText = proizvodContainer.querySelector('.badge').innerHTML;
//         let brojProizvoda = parseInt(brojProizvodaText);
//
//         ukupnaCena -= cena;
//         ukupnaCenaText.innerHTML = ukupnaCena;
//         brojProizvoda--;
//
//         izvuciPodatkeIzNaziva(nazivProizvoda);
//
//         if(brojProizvoda == 0) {
//             brojProizvodaText.innerHTML = '';
//             e.preventDefault();
//             $.ajaxSetup({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//                 }
//             });
//             jQuery.ajax({
//                 url: window.location.origin + '/ukloni/' + nazivProizvoda,
//                 method: 'get',
//                 data: {
//                     naziv: nazivProizvoda,
//                 },
//                 success: function (result) {
//                     console.log('Success');
//                 }
//             });
//         } else {
//             brojProizvodaText.innerHTML = brojProizvoda;
//         }
//
//     });
// });
//
// function izvuciPodatkeIzNaziva(nazivProizvoda) {
//     let naziv = '';
//     if(nazivProizvoda.indexOf('-') != -1) {
//         naziv = nazivProizvoda.substring(0, nazivProizvoda.indexOf('-') - 1);
//         console.log(naziv);
//     } else {
//         naziv = nazivProizvoda;
//     }
//
//     if(nazivProizvoda.indexOf('(') != -1) {
//         naziv.substring(0, nazivProizvoda.indexOf('-') - 1);
//         console.log(naziv);
//     }
// }
