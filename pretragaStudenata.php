<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 4.4.17.
 * Time: 05.05
 */
include 'init.php';
include 'konekcija.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'view/student/pretragaStudenata.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $params = array();
    if (isset($_POST['brind'])) {
        $params['brIndeksa'] = preg_replace('/\s+/', '', $_POST['brind']);
    }
    if (isset($_POST['ime'])) {
        $params['ime'] = preg_replace('/\s+/', '', $_POST['ime']);
    }
    if (isset($_POST['prezime'])) {
        $params['prezime'] = preg_replace('/\s+/', '', $_POST['prezime']);
    }
    $studenti = Student::pronadjiStudente($params);
    include 'view/student/studenti.php';
}