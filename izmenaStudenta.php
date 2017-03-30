<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 30.3.17.
 * Time: 02.02
 */

    include 'init.php';
    include 'konekcija.php';
    $student = null;
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if (isset($_GET['brind'])) {
            $brIndeksa = $_GET['brind'];
            $student = Student::vratiStudenta($brIndeksa);
        }
        include 'view/student/izmenaStudenta.php';

    }elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $brIndeksa = $_POST['brIndeksa'];
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        //PROVERA VALIDNOSTI UNOSA!!!
        $student = new Student($brIndeksa, $ime, $prezime);
        Student::izmeniStudenta($student);
        header('Location: studenti.php');
    }