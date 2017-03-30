<?php


// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/' === $uri){
    include '../studenti.php';
} else if ('/studenti' === $uri) {
    include '../studenti.php';
} elseif ('/prijave' === $uri) {
    include '../prijave.php';
} elseif ('/izmena_studenta' === $uri) {
    include '../izmenaStudenta.php';
} elseif ('/unos_studenta' === $uri) {
    include '../unosStudenta.php';
} elseif ('/brisanje_studenta' === $uri && isset($_GET['brind'])) {
    include '../brisanjeStudenta.php';
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}