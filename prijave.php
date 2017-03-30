<?php
include 'init.php';
include 'konekcija.php';

$prijave = Prijava::vratiSvePrijave();
include 'view/prijava/prijave.php';


