<?php
$title = "Dobrodosli - IRC FON";
ob_start();
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="img"><img src="static?type=img&name=indeks-unos.jpg" alt="" class="img-responsive" width="200"/></div>
            </div>
            <div class="col-md-4">
                <div class="img"><img src="static?type=img&name=pretraga.jpg" alt="" class="img-responsive" width="200"/></div>
            </div>
            <div class="col-md-4">
                <div class="img"><img src="static?type=img&name=brisanje.jpg" alt="" class="img-responsive" width="200"/></div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
include ROOT . 'view/layout.php';
?>