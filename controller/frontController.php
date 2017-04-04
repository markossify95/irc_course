<?php
// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');
if (preg_match('/^$/', $uri)) {
    include '../studenti.php';
} else if (preg_match('/^\/studenti/', $uri)) {
    if (preg_match('/^\/studenti$/', $uri)) {
        include '../studenti.php';
    } elseif (preg_match('/^\/studenti\/izmena/', $uri)) {
        include '../izmenaStudenta.php';
    } elseif (preg_match('/^\/studenti\/unos/', $uri)) {
        include '../unosStudenta.php';
    } elseif (preg_match('/^\/studenti\/brisanje/', $uri)) {
        include '../brisanjeStudenta.php';
    } elseif (preg_match('/^\/studenti\/pretraga/', $uri)) {
        include '../pretragaStudenata.php';
    }
} elseif (preg_match('/^\/prijave/', $uri)) {
    include '../prijave.php';
} elseif (preg_match('/^\/static/', $uri)) {
    include '../controller/staticController.php';
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
