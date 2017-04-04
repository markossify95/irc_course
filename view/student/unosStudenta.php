<?php $title = "Unos Novih Studenata";
ob_start();
?>
<div class="container col-md-6 col-md-offset-3">
    <h1>Unesite podatke o novom studentu:</h1>
    <form method="post" action="/studenti/unos/">
        <div class="form-group">
            <label for="brIndeksa">Broj indeksa:</label>
            <input type="text" class="form-control" name="brIndeksa">
            <?php if ($errBrind) echo $errBrind ?>
        </div>
        <div class="form-group">
            <label for="ime">Ime:</label>
            <input type="text" class="form-control" name="ime">
            <?php if ($errIme) echo $errIme ?>
        </div>
        <div class="form-group">
            <label for="prezime">Prezime:</label>
            <input type="text" class="form-control" name="prezime">
            <?php if ($errPrezime) echo $errPrezime ?>
        </div>
        <button type="submit" class="btn btn-default">Unesi</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>
