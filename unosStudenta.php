<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.3.17.
 * Time: 16.50
 */

include 'init.php';
    include 'konekcija.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        include 'view/student/unosStudenta.php';

    }elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $brIndeksa = $_POST['brIndeksa'];
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        //PROVERA VALIDNOSTI UNOSA!!!

        $student = new Student($brIndeksa, $ime, $prezime);
        Student::unesiNovogStudenta($student);
        header('Location: studenti.php');
    }