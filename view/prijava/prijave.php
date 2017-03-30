<?php $title = 'Prijave Ispita';
ob_start();
?>
<h1>Spisak studenata</h1>
<table>
    <thead>
    <td>Broj prijave</td>
    <td>Datum</td>
    <td>Student</td>
    <td>Predmet</td>
    <td>Ocena</td>
    </thead>
    <tbody>
    <?php
    /** @var $student Student */
    foreach ($prijave as $prijava) {
        ?>
        <tr>
            <td><?php echo $prijava->getBrPrijave() ?></td>
            <td><?php echo $prijava->getDatum() ?></td>
            <td><?php echo $prijava->getStudent() ?></td>
            <td><?php echo $prijava->getPredmet() ?></td>
            <td><?php echo $prijava->getOcena() ?></td>
        </tr>

        <?php
    }
    ?>

    </tbody>
</table>
<button name="btndodaj" onclick="window.location.replace('unosPrijave.php');">Dodaj Prijavu!</button>
<script type="text/javascript">
    function obrisi(id)
    {
        var url = "/brisanjeStudenta.php?brind=" + id;
        console.log(url);
        window.location.replace(url);
    }

    function izmeni(id)
    {
        var url = "/izmenaStudenta.php?brind=" + id;
        console.log(url);
        window.location.replace(url);
    }
</script>
<?php

$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>


