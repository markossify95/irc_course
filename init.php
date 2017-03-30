<?php
define('ROOT', '/var/www/irc/projects/');

spl_autoload_register(function($className) {
    $directories = array('controller/','model/');
    foreach ($directories as $directory) {

        if (file_exists(ROOT . $directory . $className . '.php')) {
            include ROOT . $directory . $className . '.php';
            return;
        }
    }
});