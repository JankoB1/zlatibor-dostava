<?php

namespace App\Models;

class Korpa
{
    public $proizvodi = null;
    public $ukupanBrojProizvoda = 0;
    public $ukupnaCena = 0;

    public function __construct($staraKorpa) {
        if ($staraKorpa) {
            $this->proizvodi = $staraKorpa->proizvodi;
            $this->ukupnaCena = $staraKorpa->ukupnaCena;
            $this->ukupanBrojProizvoda = $staraKorpa->ukupanBrojProizvoda;
        }
    }

    public function dodaj($proizvod, $naziv) {
        $ubaceniProizvod = ['broj' => 0, 'cena' => $proizvod['cena'], 'proizvod' => $proizvod];
        if ($this->proizvodi) {
            if (array_key_exists($naziv, $this->proizvodi)) {
                $ubaceniProizvod = $this->proizvodi[$naziv];
            }
        }
        $ubaceniProizvod['broj']++;
        $ubaceniProizvod['cena'] = $proizvod['cena'] * $ubaceniProizvod['broj'];
        $this->proizvodi[$naziv] = $ubaceniProizvod;
        $this->ukupanBrojProizvoda++;
        $this->ukupnaCena += $proizvod['cena'];
    }

    public function smanjiZaJedan($naziv) {
        $this->proizvodi[$naziv]['broj']--;
        $this->proizvodi[$naziv]['cena'] -= $this->proizvodi[$naziv]['proizvod']['cena'];
        $this->ukupanBrojProizvoda--;
        $this->ukupnaCena -= $this->proizvodi[$naziv]['proizvod']['cena'];

        if($this->proizvodi[$naziv]['broj'] <= 0) {
            unset($this->proizvodi[$naziv]);
        }
    }

    public function ukloniProizvod($naziv) {
        $this->ukupanBrojProizvoda -= $this->proizvodi[$naziv]['broj'];
        $this->ukupnaCena -= $this->proizvodi[$naziv]['cena'];
        unset($this->proizvodi[$naziv]);
    }
}
