
// AUTOMATSKI ISPISI PROMENE U KORPI NA FRONTU I POSALJI IH AJAX-OM

let ukupnaCena = 0;
let brojProizvoda = 0;
let proizvodi = [];

let korpaText = document.querySelector('.korpa-text');
let korpaCena = document.querySelector('.korpa-cena');

let dodajUKorpuBtns = document.querySelectorAll('.dodaj-u-korpu-btn');
let dodajUKorpuBtnsArr = [...dodajUKorpuBtns];

if(ukupnaCena == 0) {
    korpaText.innerText = 'Popunite korpu';
} else {
    korpaText.innerText = 'Zavržetak kupovine';
}

korpaCena.innerHTML = ukupnaCena;

dodajUKorpuBtnsArr.forEach((btn) => {

    btn.addEventListener('click', function () {
        let proizvodContent = btn.parentElement;
        let nazivProizvoda = proizvodContent.querySelector('.proizvod-title').innerText;
        let cenaProizvoda = 0;
        let cenaVarijacije = 0;
        let varijacije = [];
        let prilozi = [];

        let vrsteVarijacija = proizvodContent.querySelectorAll('.varijacija-naziv');
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

        let priloziContainer = proizvodContent.querySelector('.prilozi').querySelectorAll('input[type="checkbox"]');
        for(i = 0; i < priloziContainer.length; i++) {
            if(priloziContainer[i].checked) {
                ukupnaCena += parseInt(priloziContainer[i].value);
                prilozi.push(priloziContainer[i].name);
            }
        }

        proizvod = {
            'naziv'     : nazivProizvoda,
            'cena'      : cenaProizvoda,
            'slika'     : 'slika',
            'varijacije': varijacije,
            'prilozi'   : prilozi
        }
        proizvodi.push(proizvod);
        brojProizvoda++;

        if(ukupnaCena != 0) {
            korpaText.innerText = 'Zavržetak kupovine';
        }
        korpaCena.innerHTML = ukupnaCena;
    });
});

jQuery('.dodaj-u-korpu-btn').click(function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = $('#ajaxSubmit').data('url');
    jQuery.ajax({
        url: url,
        method: 'post',
        data: {
            proizvodi: proizvodi,
            ukupnaCena: ukupnaCena,
            brojProizvoda: brojProizvoda
        },
        success: function (result) {
            console.log(result);
        }
    })
});
