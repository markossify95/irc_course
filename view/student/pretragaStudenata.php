<?php $title = "Pretraga studenata";
ob_start();
?>
    <div class="container">
        <form method="post" action="/studenti/pretraga">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <br>
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" name="brind" placeholder="Broj indeksa"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <br>
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" name="ime" placeholder="Ime"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <br>
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" name="prezime" placeholder="Prezime"/>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-submit col-sm-2 col-md-offset-5">Pretrazi</button>
        </form>
    </div>
<?php
$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>