<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 30.3.17.
 * Time: 03.20
 */
include 'init.php';
include 'konekcija.php';

if(isset($_GET['brind'])){
    $brIndeksa = $_GET['brind'];
    $brIndeksa = preg_replace('/\s+/', '', $brIndeksa);
    Student::obrisiStudenta($brIndeksa);
}
header('Location: /studenti');