<?php $title = "Unos Novih Studenata";
ob_start();
?>

<h1>UNesite podatke o novom studentu:</h1>
<form method="post" action="unosStudenta.php">
    Broj indeksa: <input type="text" name="brIndeksa"><br>
    Ime: <input type="text" name="ime"><br>
    Prezime: <input type="text" name="prezime"><br>
    <input type="submit" value="Unesi!">
</form>

<?php
$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>
