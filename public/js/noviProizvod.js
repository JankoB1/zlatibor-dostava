// let dodajNoviPrilogButton = document.querySelector('.dodaj-novi-prilog');
// dodajNoviPrilogButton.addEventListener('click', function () {
//     let priloziContainer = document.querySelector('.prilozi');
//     let dropdown = document.getElementById('moguci-prilozi');
//     let noviDropdown = dropdown.cloneNode(true);
//
//     let cenaPriloga = document.getElementById('cena-priloga');
//     let novaCenaPriloga = cenaPriloga.cloneNode(true);
//     novaCenaPriloga.value = 0;
//
//     priloziContainer.appendChild(noviDropdown);
//     priloziContainer.appendChild(novaCenaPriloga);
// });

let mapaVV = document.getElementById('varijacije-js');
let mapaVVObjekti = JSON.parse(mapaVV.innerText);
console.log(mapaVVObjekti);

let vrstaVarijacije = document.getElementById('vrsta-varijacije');
vrstaVarijacije.onchange = function () {

    let varijacijeCont = document.querySelector('.varijacije');

    let posebnaVarijacijaCont = document.createElement('div');
    posebnaVarijacijaCont.classList.add('posebna-varijacija');

    let posebnaVarijacijaSegment = document.createElement('div');
    posebnaVarijacijaSegment.classList.add('posebna-varijacija-segment');

    let select = document.createElement('select');
    select.name = 'varijacija[]';
    select.id = 'varijacija';

    mapaVVObjekti.forEach((vrstaV) => {
        if (vrstaV.naziv == vrstaVarijacije.value) {
            let izabraneVarijacije = vrstaV.varijacije;
            izabraneVarijacije.forEach((varijacija) => {

                let option = document.createElement('option');
                option.value = varijacija.naziv;
                option.innerHTML = varijacija.naziv;
                select.appendChild(option);

            });
        };
    });

    let label = document.createElement('label');
    label.for = 'cena-priloga';
    label.innerText = 'Cena Proizvoda (izabrane varijacije)';

    let input = document.createElement('input');
    input.type = 'number';
    input.name = 'cena-proizvoda-v[]';
    input.id = 'cena-proizvoda-v';

    let dodajNovuVarijaciju = document.createElement('div');
    dodajNovuVarijaciju.classList.add('dodaj-novu-varijaciju');
    dodajNovuVarijaciju.innerText = '+';

    dodajNovuVarijaciju.addEventListener('click', function () {
        let select1 = document.createElement('select');
        select1.name = 'varijacija[]';
        select1.id = 'varijacija';

        mapaVVObjekti.forEach((vrstaV) => {
            if (vrstaV.naziv == vrstaVarijacije.value) {
                let izabraneVarijacije1 = vrstaV.varijacije;
                izabraneVarijacije1.forEach((varijacija) => {

                    let option1 = document.createElement('option');
                    option1.value = varijacija.naziv;
                    option1.innerHTML = varijacija.naziv;
                    select1.appendChild(option1);

                });
            };
        });

        let label1 = document.createElement('label');
        label1.for = 'cena-priloga';
        label1.innerText = 'Cena Proizvoda (izabrane varijacije)';

        let input1 = document.createElement('input');
        input1.type = 'number';
        input1.name = 'cena-proizvoda-v[]';
        input1.id = 'cena-proizvoda-v';

        let izbrisiVarijaciju1 = document.createElement('div');
        izbrisiVarijaciju1.classList.add('izbrisi-varijaciju');
        izbrisiVarijaciju1.innerText = '-';

        let posebnaVarijacijaSegment1 = document.createElement('div');
        posebnaVarijacijaSegment1.classList.add('posebna-varijacija-segment');
        posebnaVarijacijaSegment1.appendChild(select1);
        posebnaVarijacijaSegment1.appendChild(label1);
        posebnaVarijacijaSegment1.appendChild(input1);
        posebnaVarijacijaSegment1.appendChild(izbrisiVarijaciju1);
        posebnaVarijacijaCont.appendChild(posebnaVarijacijaSegment1);

        izbrisiVarijaciju1.addEventListener('click', function () {
            posebnaVarijacijaCont.removeChild(posebnaVarijacijaSegment1);
        });
    });

    let izbrisiVarijaciju = document.createElement('div');
    izbrisiVarijaciju.classList.add('izbrisi-varijaciju');
    izbrisiVarijaciju.innerText = '-';

    posebnaVarijacijaSegment.appendChild(select);
    posebnaVarijacijaSegment.appendChild(label);
    posebnaVarijacijaSegment.appendChild(input);
    posebnaVarijacijaSegment.appendChild(izbrisiVarijaciju);
    posebnaVarijacijaCont.appendChild(posebnaVarijacijaSegment);
    posebnaVarijacijaCont.appendChild(dodajNovuVarijaciju);

    izbrisiVarijaciju.addEventListener('click', function () {
        posebnaVarijacijaCont.removeChild(posebnaVarijacijaSegment);
    });

    varijacijeCont.appendChild(posebnaVarijacijaCont);
};
