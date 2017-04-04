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
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['brind'])) {
        $brIndeksa = $_GET['brind'];
        $brIndeksa = preg_replace('/\s+/', '', $brIndeksa);
        $student = Student::vratiStudenta($brIndeksa);
        include 'view/student/izmenaStudenta.php';
    } else
        header('Location: /studenti/');

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brIndeksa = $_POST['brIndeksa'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $brIndeksa = preg_replace('/\s+/', '', $brIndeksa);
    $ime = preg_replace('/\s+/', '', $ime);
    $prezime = preg_replace('/\s+/', '', $prezime);
    $student = new Student($brIndeksa, $ime, $prezime);
    Student::izmeniStudenta($student);
    header('Location: /studenti');
}