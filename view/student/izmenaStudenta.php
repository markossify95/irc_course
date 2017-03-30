<?php $title = "Izmena Studenata";
ob_start();
?>

    <h2>Unesite podatke o studentu koga menjate:</h2>
    <form method="post" action="izmena_studenta">
        Broj indeksa: <input type="text" name="brIndeksa" value="
        <?php if ($student != null) echo $student->getBrIndeksa()?>"><br>
        Ime: <input type="text" name="ime" value="
        <?php if ($student != null) echo $student->getIme()?>"><br>
        Prezime: <input type="text" name="prezime" value="
        <?php if ($student != null) echo $student->getPrezime()?>"><br>
        <input type="submit" value="Izmeni!">
    </form>

<?php
$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>