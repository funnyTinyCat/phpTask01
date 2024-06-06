<?php

require "entities/predracun.php";

$p1 = new Predracun(2024, );

print("<br />");

# <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Title of document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h4 class="text-center">PREDRAČUN BR. <?php echo $p1->get_godina_sifra_redni_broj_predracuna(); ?> ZA 
<?php echo strtoupper($p1->get_usluga_naziv()); ?>
</h4>
    <br />
    <table class="table table-bordered border-primary">
        <thead class="text-center" >
            <tr  >
                <th style="background-color: var(--bs-primary-bg-subtle)" colspan="3">Usluga</th>
                <th style="background-color: var(--bs-primary-bg-subtle)" scope="col">Cijena</th>
                <th style="background-color: var(--bs-primary-bg-subtle)" scope="col">Količina</th>
                <th style="background-color: var(--bs-primary-bg-subtle)" scope="col">Ukupno</th>
            </tr>
        </thead>
        <tbody>
        <!-- six columns    -->
            <tr>
                <th class="col-1" scope="row"><?php echo $p1->get_prefiks_sifra_sufiks();  ?></th>
                <td class="col-4 text-center"><?php echo $p1->get_datum_od_do(); ?></td>
                <td class="col-1 text-center"><?php echo $p1->get_broj_osoba(); ?></td>
                <td class="col-1 text-end"><?php echo $p1->get_cijena_x_kolicina(); ?></td>
                <td class="col-4 text-center"><?php echo $p1->get_kolicina_nocenja(); ?></td>
                <td class="col-1 text-end"><?php echo $p1->get_ukupno(); ?></td>
            </tr>
            <tr>
                <th colspan="6" scope="row">&nbsp;</th>
            </tr>
            <tr >
                <th style="background-color: var(--bs-primary-bg-subtle)" colspan="5">Ukupno</th>
                <td style="background-color: var(--bs-primary-bg-subtle); font-weight:bold" class="col-1 text-end" ><?php echo $p1->get_ukupno(); ?></td>
            </tr>
        </tbody>
    </table>
    <p>Uključeno u cijenu (bez dodatne naplate): turistička pristojba</p>
    <br />
    <h4 class="text-center">DINAMIKA PLAĆANJA</h4>
    <table class="table table-bordered border-primary">
        <tbody>
            <tr  class="text-center">
                <th class="col-2" style="background-color: var(--bs-primary-bg-subtle)">Uplata</th>
                <th class="col-4" style="background-color: var(--bs-primary-bg-subtle)">Način plaćanja</th>
                <th class="col-4" style="background-color: var(--bs-primary-bg-subtle)">Vrijeme plaćanja</th>
                <th class="col-2" style="background-color: var(--bs-primary-bg-subtle)">Iznos</th>
            </tr>
            <tr  class="text-center">
                <th class="col-2 text-start" >Akontacija</th>
                <td class="col-4" ><?php echo $p1->get_nacin_placanja(); ?></td>
                <td class="col-4" ><?php echo $p1->get_vrijeme_placanja_akontacija(); ?></td>
                <td class="col-2 text-end" style="font-weight:bold" ><?php echo $p1->get_iznos_akontacija(); ?></td>
            </tr>
            <tr  class="text-center">
                <th class="col-2 text-start" >Ostatak iznosa</th>
                <td class="col-4" ><?php echo $p1->get_nacin_placanja(); ?></td>
                <td class="col-4" ><?php echo $p1->get_vrijeme_placanja_ostatak_iznosa(); ?></td>
                <td class="col-2 text-end" style="font-weight:bold" ><?php echo $p1->get_iznos_ostatak_iznosa(); ?></td>
            </tr>

        </tbody>
    </table>
    <p>Uplatom akontacije gost potvrđuje da je upoznat te se slaže s Općim uvjetima pružanja usluga smještaja u privatnim kapacitetima.</p>
</div>
</body>
</html>