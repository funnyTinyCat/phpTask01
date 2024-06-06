<?php

class Predracun {

    private $godina = 0;
    private $uslugaNaziv = "uslugu smještaja";
    private $uslugaSifra = "16950";
    # ["usluge smještaja"=>"16950", "usluge jedrenja"=>"16951"];
    private $redniBrojPredracuna = 63;
    private $prefiksSifraUsluga = "AS"; 
    private $sufiksSifraUsluga = "a";
    private $datumOd = "";
    private $datumDo = "";
    private $brojOsoba = 0;
    private $cijena = 52;
    private $kolicinaNocenja = 7;
    private $akontacija = 50;
    private $nacinPlacanja = "Kreditnom karticom (Visa, EC/MC, Maestro)";
    private $valuta = "&euro;";
    private $datumAkontacija;
    private $vrijemeAkontacija;
    private $datumVrijemePlacanja;
    private $vrijemeVrijemePlacanja;


    function __construct($godina=0, $uslugaNaziv="AB", $uslugaSifra="", $redniBrojPredracuna="", 
        $prefiksSifraUsluga="AS", 
        $sufiksSifraUsluga="a", $datumOd="5.6.2024.", $datumDo="15.6.2024.", $brojOsoba=2, $cijena=52, 
        $kolicinaNocenja=7, $akontacija=50, $nacinPlacanja="Kreditnom karticom (Visa, EC/MC, Maestro)", 
        $valuta="&euro;", $datumAkontacija = "5.6.2024.", $vrijemeAkontacija = "11:00", 
        $datumVrijemePlacanja = "5.6.2024.", $vrijemeVrijemePlacanja = "15:00"
        ) {

        $this->godina = $godina;
        $this->uslugaNaziv;
        $this->uslugaSifra;
        $this->redniBrojPredracuna;
        $this->prefiksSifraUsluga;
        $this->sufiksSifraUsluga;
        $this->datumOd = $datumOd;
        $this->datumDo = $datumDo;
        $this->brojOsoba = $brojOsoba;
        $this->cijena = $cijena;
        $this->kolicinaNocenja = $kolicinaNocenja;
        $this->akontacija;
        $this->nacinPlacanja = $nacinPlacanja;
        $this->valuta = $valuta;
        $this->datumAkontacija = $datumAkontacija;
        $this->vrijemeAkontacija = $vrijemeAkontacija;
        $this->datumVrijemePlacanja = $datumVrijemePlacanja;
        $this->vrijemeVrijemePlacanja = $vrijemeVrijemePlacanja;


    } # end construct
    
    function get_usluga_naziv () {
        return $this->uslugaNaziv;
    }

    function get_usluga_sifra () {

        return $this->uslugaSifra;
    }

    function get_godina () {

        return $this->godina;
    }

    function get_redni_broj_predracuna() {
        return $this->redniBrojPredracuna;
    }

    function get_godina_sifra_redni_broj_predracuna () {
        return "$this->godina-$this->uslugaSifra-$this->redniBrojPredracuna";
    }

    function get_prefiks_sifra_usluga () {
        return $this->prefiksSifraUsluga;
    }

    function get_sufiks_sifra_usluga() {
        return $this->sufiksSifraUsluga;
    }

    function get_prefiks_sifra_sufiks () {
        return "$this->prefiksSifraUsluga-$this->uslugaSifra-$this->sufiksSifraUsluga";
    }

    function get_datum_od_do () {
        return "$this->datumOd - $this->datumDo";
    }

    function get_broj_osoba () {

        return "$this->brojOsoba (osoba)";
    }

    function get_cijena_x_kolicina () {

        $result = ($this->cijena * $this->brojOsoba);

        $result = number_format((float)$result, 2, ',', '');

        return "$result $this->valuta";
    }

    function get_valuta () {
        return $this->valuta;
    }

    function get_kolicina_nocenja () {
        return "$this->kolicinaNocenja (noćenja)";
    }

    function get_ukupno () {
        
        $result = ($this->cijena * $this->brojOsoba * $this->kolicinaNocenja);

        $result = number_format((float)$result, 2, ',', '');

        return "$result $this->valuta";
    }

    function get_nacin_placanja () {
        return $this->nacinPlacanja;
    }

    function get_vrijeme_placanja_akontacija ()  {
        return "Najkasnije $this->datumAkontacija do $this->vrijemeAkontacija" . "h";
    }

    function get_vrijeme_placanja_ostatak_iznosa () {
        return "Najkasnije $this->datumVrijemePlacanja do $this->vrijemeVrijemePlacanja" . "h";
    }

    function get_iznos_akontacija () {

        $postotak = $this->akontacija / 100;

        $result = ($this->brojOsoba * $this->cijena * $this->kolicinaNocenja) * $postotak;

        $result = number_format((float)$result, 2, ',', '');

        return "$result $this->valuta";
    }

    function get_iznos_ostatak_iznosa () {

        $postotak = $this->akontacija / 100;

        $result = ($this->brojOsoba * $this->cijena * $this->kolicinaNocenja) * $postotak;

        $result = number_format((float)$result, 2, ',', '');

        return "$result $this->valuta";
    }
}


?>