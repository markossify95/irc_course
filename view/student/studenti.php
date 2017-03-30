<?php $title = 'Studenti';
ob_start();
?>
<h1>Spisak studenata</h1>
<table>
    <thead>
    <td>Broj indeksa</td>
    <td>Ime</td>
    <td>Prezime</td>
    <td>Izmena</td>
    <td>Brisanje</td>
    </thead>
    <tbody>
    <?php
    /** @var $student Student */
    foreach ($studenti as $student) {
        ?>
        <tr>
            <td><?php echo $student->getBrIndeksa() ?></td>
            <td><?php echo $student->getIme() ?></td>
            <td><?php echo $student->getPrezime() ?></td>
            <td><button name="btnobrisi" onclick="obrisi('<?php echo $student->getBrIndeksa() ?>')">Obrisi</button></td>
            <td><button name="btnizmeni" onclick="izmeni('<?php echo $student->getBrIndeksa() ?>')">Izmeni</button></td>
        </tr>

        <?php
    }
    ?>

    </tbody>
</table>
<button name="btndodaj" onclick="window.location.replace('unosStudenta/');">Dodaj Studenta!</button>
<script type="text/javascript">
    function obrisi(id)
    {
        var url = "/brisanje_studenta?brind=" + id;
        console.log(url);
        window.location.replace(url);
    }

    function izmeni(id)
    {
        var url = "/izmena_studenta?brind=" + id;
        console.log(url);
        window.location.replace(url);
    }
</script>
<?php

$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>


