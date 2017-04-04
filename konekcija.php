<?php

function otvoriKonekciju()
{
    //return new PDO('mysql:host=10.10.83.210;dbname=obuka_irc', 'php', 'test.123.');
    return new PDO('mysql:host=127.0.0.1:3306;dbname=obuka_irc', 'root', 'root');
}

function zatvoriKonekciju(&$konekcija)
{
    $konekcija = null;
}



function select($tableName, $attributes = '*', $condition = null) {
    $query = 'SELECT '  . $attributes . ' FROM ' . $tableName;
    if($condition != null) {
        $query .= ' WHERE ' . $condition;
    }
    $connection = otvoriKonekciju();
    $statement = $connection->query($query);
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    zatvoriKonekciju($connection);

    return $resultSet;
}

function insert($tableName, $columns, $attrs){

    //sigurno postoji znatno bolji nacin od ovoga
    //ali nisam bas vest sa baratanjem metapodacima u php-u
    //pa sam odlucio da ipak idem pesacki

    $query = 'INSERT INTO ' . $tableName . ' (';
    for($i = 0; $i < sizeof($columns) - 1; $i++){
        $query = $query . $columns[$i] . ', ';
    }
    $query = $query . $columns[$i] . ')' . ' VALUES ' . '(';
    for($i = 0; $i < sizeof($columns) - 1; $i++){
        $query = $query . ':' . $columns[$i] . ', ';
    }
    $query = $query . ':' . $columns[$i] . ')';

    //test
    //echo "UPIT JE : " . $query;

    //varijanta gde u svakoj klasi imamo metodu getAllAttributes();
    //nesigurna, zato ipak u studentu raspakujem studenta pa posaljem niz njegovih atributa
    //$attrs = $obj->getAllAttributes();

    $connection = otvoriKonekciju();
    $stmt = $connection->prepare($query);
    $i = 0;
    foreach ($columns as $column){
        $stmt->bindParam(':' . $column, $attrs[$i++]);
        //$i++;
    }


    $stmt->execute(); // proveriti uspesnost izvrsenja!
    zatvoriKonekciju($connection);
}

function update($tableName, $columns, $attrs, $condition, $param){
    //i ovde treba prepared stmt
    $query = 'UPDATE ' . $tableName . ' SET ';
    $i = 0;
    foreach ($columns as $col){
        $query = $query . $col . ' = ' . $attrs[$i++] . ', ';
    }
    $query = rtrim($query, ", ");
    //$query = $query . ' WHERE ' . $condition . ' = ' . preg_replace('/\s+/', '', $param);
    $query = $query . ' WHERE ' . $condition . ' = ' . $param;

    //test
    //echo 'Upit je: ' . $query;
    $connection = otvoriKonekciju();
    $stmt = $connection->prepare($query);
    $stmt->execute(); // proveriti uspesnost izvrsenja!
    zatvoriKonekciju($connection);
}


function delete($tableName, $condition, $param){
    $query = 'DELETE FROM ' . $tableName . ' WHERE ' . $condition . ' = ' . $param;
    $connection = otvoriKonekciju();
    $stmt = $connection->prepare($query);
    $stmt->execute(); // proveriti uspesnost izvrsenja!
    zatvoriKonekciju($connection);
}