<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 4.4.17.
 * Time: 03.46
 */
if(isset($_GET['type'])){
    $type = $_GET['type'];
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $path = '../static/' . $type . '/' . $name;
        readfile($path);
    }
}

