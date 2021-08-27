// AUTOMATSKI ISPISI PROMENE U KORPI NA FRONTU I POSALJI IH AJAX-OM

let proizvodiUKorpi = [];

let korpaText = document.querySelector('.korpa-text');
let korpaCena = document.querySelector('.korpa-cena');

let ukupnaCena = parseInt(korpaCena.innerText);

let dodajUKorpuBtns = document.querySelectorAll('.dodaj-u-korpu-btn');
let dodajUKorpuBtnsArr = [...dodajUKorpuBtns];

if(ukupnaCena > 0) {
    korpaText.innerText = 'Popunite korpu';
} else {
    korpaText.innerText = 'Zavržetak kupovine';
}

// DODAJ U KORPU

dodajUKorpuBtnsArr.forEach((btn) => {

    btn.addEventListener('click', function (e) {
        let dodatneInformacije = btn.parentElement;
        let proizvodContent = dodatneInformacije.parentElement;
        let nazivProizvoda = proizvodContent.querySelector('.proizvod-title').innerText;
        let cenaProizvoda = 0;
        let cenaVarijacije = 0;
        let varijacije = [];
        let prilozi = [];

        let vrsteVarijacija = proizvodContent.querySelectorAll('.varijacija-naziv');
        let varijacijeObjekat = regulisiVarijacijeZaDodavanje(vrsteVarijacija, cenaProizvoda, proizvodContent, ukupnaCena, varijacije, nazivProizvoda, cenaVarijacije);

        varijacije = varijacijeObjekat.varijacije;
        cenaProizvoda = varijacijeObjekat.cenaProizvoda;
        ukupnaCena = varijacijeObjekat.ukupnaCena;

        let priloziContainer = proizvodContent.querySelector('.prilozi').querySelectorAll('input[type="checkbox"]');
        let priloziObjekat = regulisiPrilogeZaDodavanje(priloziContainer, ukupnaCena, prilozi);

        prilozi = priloziObjekat.prilozi;
        ukupnaCena = priloziObjekat.ukupnaCena;

        nazivProizvoda = dodajVarijacijeNazivu(varijacije, nazivProizvoda);

        proizvod = {
            'naziv'     : nazivProizvoda,
            'cena'      : cenaProizvoda,
            'slika'     : '',
            'varijacije': varijacije,
            'prilozi'   : prilozi
        }

        proizvodiUKorpi.push(nazivProizvoda);

        if(ukupnaCena != 0) {
            korpaText.innerText = 'Zavržetak kupovine';
        }
        korpaCena.innerHTML = ukupnaCena;

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        var url = $('#ajaxSubmit').data('url');
        jQuery.ajax({
            url: url,
            method: 'post',
            data: {
                proizvod: proizvod,
            },
            success: function (result) {
                console.log(result);
            }
        })

    });
});

// SMANJI ZA 1

let izbaciBtns = document.querySelectorAll('.izbaci');
let izbaciBtnsArr = [...izbaciBtns];

izbaciBtnsArr.forEach((btn) => {
    btn.addEventListener('click', function (e) {
        let dodajIzbaciContainer = btn.parentElement;
        let dodatneInformacije = dodajIzbaciContainer.parentElement;
        let proizvodContent = dodatneInformacije.parentElement;
        let nazivProizvoda = proizvodContent.querySelector('.proizvod-title').innerText;
        let cenaProizvoda = 0;
        let cenaVarijacije = 0;
        let varijacije = [];
        let prilozi = [];

        let vrsteVarijacija = proizvodContent.querySelectorAll('.varijacija-naziv');
        let varijacijeObjekat = regulisiVarijacijeZaOduzimanje(vrsteVarijacija, cenaProizvoda, proizvodContent, ukupnaCena, varijacije, nazivProizvoda, cenaVarijacije);

        varijacije = varijacijeObjekat.varijacije;
        ukupnaCena = varijacijeObjekat.ukupnaCena;

        let priloziContainer = proizvodContent.querySelector('.prilozi').querySelectorAll('input[type="checkbox"]');
        let priloziObjekat = regulisiPrilogeZaOduzimanje(priloziContainer, ukupnaCena, prilozi);

        ukupnaCena = priloziObjekat.ukupnaCena;

        if(ukupnaCena > 0) {
            korpaText.innerText = 'Zavržetak kupovine';
        } else {
            korpaText.innerText = 'Popunite korpu';
        }
        korpaCena.innerHTML = ukupnaCena;

        nazivProizvoda = dodajVarijacijeNazivu(varijacije, nazivProizvoda);
        proizvodiUKorpi = izbaciIzKorpe(proizvodiUKorpi, nazivProizvoda);

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        jQuery.ajax({
            url: window.location.origin + '/smanji-za-1/' + nazivProizvoda,
            method: 'post',
            data: {
                naziv: nazivProizvoda,
            },
            success: function (result) {
                console.log('Success');
            }
        })

        console.log(window.location.origin + 'ukloni/' + nazivProizvoda);

    });
});

// POVECAJ ZA 1

let dodajBtns = document.querySelectorAll('.dodaj');
let dodajBtnsArr = [...dodajBtns];

dodajBtnsArr.forEach((btn) => {

    btn.addEventListener('click', function (e) {
        let dodajIzbaciContainer = btn.parentElement;
        let dodatneInformacije = dodajIzbaciContainer.parentElement;
        let proizvodContent = dodatneInformacije.parentElement;
        let nazivProizvoda = proizvodContent.querySelector('.proizvod-title').innerText;
        let cenaProizvoda = 0;
        let cenaVarijacije = 0;
        let varijacije = [];
        let prilozi = [];

        let vrsteVarijacija = proizvodContent.querySelectorAll('.varijacija-naziv');
        let varijacijeObjekat = regulisiVarijacijeZaDodavanje(vrsteVarijacija, cenaProizvoda, proizvodContent, ukupnaCena, varijacije, nazivProizvoda, cenaVarijacije);

        varijacije = varijacijeObjekat.varijacije;
        cenaProizvoda = varijacijeObjekat.cenaProizvoda;
        ukupnaCena = varijacijeObjekat.ukupnaCena;

        let priloziContainer = proizvodContent.querySelector('.prilozi').querySelectorAll('input[type="checkbox"]');
        let priloziObjekat = regulisiPrilogeZaDodavanje(priloziContainer, ukupnaCena, prilozi);

        prilozi = priloziObjekat.prilozi;
        ukupnaCena = priloziObjekat.ukupnaCena;

        nazivProizvoda = dodajVarijacijeNazivu(varijacije, nazivProizvoda);

        proizvod = {
            'naziv'     : nazivProizvoda,
            'cena'      : cenaProizvoda,
            'slika'     : '',
            'varijacije': varijacije,
            'prilozi'   : prilozi
        }

        proizvodiUKorpi.push(nazivProizvoda);

        if(ukupnaCena != 0) {
            korpaText.innerText = 'Zavržetak kupovine';
        }
        korpaCena.innerHTML = ukupnaCena;

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        var url = $('#ajaxSubmit').data('url');
        jQuery.ajax({
            url: url,
            method: 'post',
            data: {
                proizvod: proizvod,
            },
            success: function (result) {
                console.log(result);
            }
        })

    });
});

// EXPANDERI

let plusevi = document.querySelectorAll('.expander');
let pluseviArr = [...plusevi];

pluseviArr.forEach((plus) => {
    plus.addEventListener('click', function () {
        let proizvodLevo = plus.parentElement;
        let proizvodContainer = proizvodLevo.parentElement;
        let dodatneInformacije = proizvodContainer.querySelector('.dodatne-informacije');
        dodatneInformacije.classList.toggle('active');
    });
});

// FUNKCIJE

function dodajVarijacijeNazivu(varijacije, nazivProizvoda) {
    if(varijacije[0] == nazivProizvoda) {
        return nazivProizvoda;
    }

    if(varijacije.length != 0) {
        nazivProizvoda += ' - '
        for(i = 0; i < varijacije.length; i++) {
            nazivProizvoda += varijacije[i];
            if(i != varijacije.length-1) {
                nazivProizvoda += ', ';
            }
        }
    }
    return nazivProizvoda;
}

function regulisiVarijacijeZaDodavanje(vrsteVarijacija, cenaProizvoda, proizvodContent, ukupnaCena, varijacije, nazivProizvoda, cenaVarijacije) {
    if (vrsteVarijacija.length == 0) {
        cenaProizvoda = parseInt(proizvodContent.querySelector('input[type="hidden"]').value)
        ukupnaCena += cenaProizvoda;
        varijacije.push(nazivProizvoda);
    }

    for(i = 0; i < vrsteVarijacija.length; i++) {
        let izbori = proizvodContent.querySelectorAll('input[name="' + vrsteVarijacija[i].innerText + '"]');
        for(j = 0; j < izbori.length; j++) {
            if(izbori[j].checked) {
                cenaVarijacije = parseInt(izbori[j].value)
                ukupnaCena += cenaVarijacije;
                cenaProizvoda += cenaVarijacije;
                varijacije.push(izbori[j].id);
            }
        }
    }

    return {
        'varijacije': varijacije,
        'cenaProizvoda': cenaProizvoda,
        'ukupnaCena': ukupnaCena,
    }
}

function regulisiVarijacijeZaOduzimanje(vrsteVarijacija, cenaProizvoda, proizvodContent, ukupnaCena, varijacije, nazivProizvoda, cenaVarijacije) {
    if (vrsteVarijacija.length == 0) {
        cenaProizvoda = parseInt(proizvodContent.querySelector('input[type="hidden"]').value)
        ukupnaCena -= cenaProizvoda;
        varijacije.push(nazivProizvoda);
    }

    for(i = 0; i < vrsteVarijacija.length; i++) {
        let izbori = proizvodContent.querySelectorAll('input[name="' + vrsteVarijacija[i].innerText + '"]');
        for(j = 0; j < izbori.length; j++) {
            if(izbori[j].checked) {
                cenaVarijacije = parseInt(izbori[j].value)
                ukupnaCena -= cenaVarijacije;
                cenaProizvoda -= cenaVarijacije;
                varijacije.push(izbori[j].id);
            }
        }
    }

    return {
        'varijacije': varijacije,
        'ukupnaCena': ukupnaCena,
    }
}

function regulisiPrilogeZaDodavanje(priloziContainer, ukupnaCena, prilozi) {
    for(i = 0; i < priloziContainer.length; i++) {
        if(priloziContainer[i].checked) {
            ukupnaCena += parseInt(priloziContainer[i].value);
            prilozi.push(priloziContainer[i].name);
        }
    }

    return {
        'prilozi': prilozi,
        'ukupnaCena': ukupnaCena
    }
}

function regulisiPrilogeZaOduzimanje(priloziContainer, ukupnaCena, prilozi) {
    for(i = 0; i < priloziContainer.length; i++) {
        if(priloziContainer[i].checked) {
            ukupnaCena += parseInt(priloziContainer[i].value);
            prilozi.push(priloziContainer[i].name);
        }
    }

    return {
        'ukupnaCena': ukupnaCena
    }
}

function izbaciIzKorpe(proizvodiUKorpi, nazivProizvoda) {

    return proizvodiUKorpi.filter(function(proizvod){
        return proizvod != nazivProizvoda;
    });
}
