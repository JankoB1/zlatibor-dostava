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
    let posebnaVarijacijaCont = document.querySelector('.posebna-varijacija');
    let formaVarijacije = '<select name="varijacija[]" id="varijacija">';
    mapaVVObjekti.forEach((vrstaV) => {
        if (vrstaV.naziv == vrstaVarijacije.value) {
            let izabraneVarijacije = vrstaV.varijacije;
            izabraneVarijacije.forEach((varijacija) => {
                formaVarijacije += '<option value="' + varijacija.naziv + '">' + varijacija.naziv + '</option>';
            });
        }
        ;
    });
    formaVarijacije += '</select>';
    formaVarijacije += '<label for="cena-priloga">Cena Proizvoda (izabrane varijacije)</label>\n' +
        '<input type="number" name="cena-proizvoda-v[]" id="cena-proizvoda-v">' + '<div class="dodaj-novu-varijaciju">+</div>';
    posebnaVarijacijaCont.innerHTML = formaVarijacije;
};
