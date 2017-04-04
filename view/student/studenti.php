<?php $title = 'Studenti';
ob_start();
?>
<h1>Spisak studenata</h1>

<div class="container">
    <table class="table table-hover">
        <thead>
        <td>Broj indeksa</td>
        <td>Ime</td>
        <td>Prezime</td>
        <td>Brisanje</td>
        <td>Izmena</td>
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
                <td>
                    <button name="btnobrisi" onclick="obrisi('<?php echo $student->getBrIndeksa() ?>')"
                            class="btn btn-danger">Obrisi
                    </button>
                </td>
                <td>
                    <button name="btnizmeni" onclick="izmeni('<?php echo $student->getBrIndeksa() ?>')"
                            class="btn btn-primary">Izmeni
                    </button>
                </td>
            </tr>

            <?php
        }
        ?>

        </tbody>
    </table>
</div>
<div class="btn-group col-md-10 col-md-offset-5">
    <button name="btndodaj" onclick="window.location.replace('/studenti/unos/');"
            class="btn btn-success">Dodaj Studenta!
    </button>

    <button name="btnpretrazi" onclick="window.location.replace('/studenti/pretraga/');"
            class="btn btn-success">Pretrazi
    </button>
</div>
<script type="text/javascript">
    function obrisi(id) {
        var c = confirm("Potvrdite brisanje:");
        if (c == true) {
            var url = "/studenti/brisanje?brind=" + id;
            window.location.replace(url);
        }
    }

    function izmeni(id) {
        var url = "/studenti/izmena?brind=" + id;
        window.location.replace(url);
    }
</script>
<?php

$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>


