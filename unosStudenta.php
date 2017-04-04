<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.3.17.
 * Time: 16.50
 */

include 'init.php';
include 'konekcija.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'view/student/unosStudenta.php';

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flag = 0;
    $brIndeksa = preg_replace('/\s+/', '', $_POST['brIndeksa']);
    $ime = preg_replace('/\s+/', '', $_POST['ime']);
    $prezime = preg_replace('/\s+/', '', $_POST['prezime']);

    if (strlen($brIndeksa) < 4) {
        $errBrind = 'Greska, nepravilno unet broj indeksa!';
        $flag = 1;
    }
    if (strlen($ime) < 2) {
        $errIme = 'Greska, nepravilno uneto ime';
        $flag = 1;
    }
    if (strlen($prezime) < 3) {
        $errPrezime = 'Greska, nepravilno uneto prezime';
        $flag = 1;
    }
    if ($flag == 1) {
        include 'view/student/unosStudenta.php';
    } else {
        $student = new Student($brIndeksa, $ime, $prezime);
        Student::unesiNovogStudenta($student);
        header('Location: /studenti');
    }
}