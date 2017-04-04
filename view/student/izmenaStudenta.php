<?php $title = "Izmena Studenata";
ob_start();
?>

    <div class="container col-md-6 col-md-offset-3">
        <h2>Unesite podatke o studentu koga menjate:</h2>
        <form method="post" action="/studenti/izmena/">

            <div class="form-group">
                <label for="brIndeksa">Broj indeksa:</label>
                <input type="text" class="form-control" name="brIndeksa" value="
        <?php echo $student->getBrIndeksa() ?>">
            </div>
            <div class="form-group">
                <label for="ime">Ime:</label>
                <input type="text" class="form-control" name="ime" value="
        <?php echo $student->getIme() ?>">
            </div>
            <div class="form-group">
                <label for="ime">Prezime:</label>
                <input type="text" class="form-control" name="prezime" value="
        <?php echo $student->getPrezime() ?>">
            </div>
            <button type="submit" class="btn btn-default">Izmeni</button>
        </form>
    </div>
<?php
$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>