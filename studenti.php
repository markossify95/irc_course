<?php
include 'init.php';
include 'konekcija.php';

$studenti = Student::vratiSveStudente();
include 'view/student/studenti.php';


