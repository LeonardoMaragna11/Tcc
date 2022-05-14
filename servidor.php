<?php

// $servidor = "localhost";
// $banco = "id18512535_tcc";
// $us = "id18512535_root";
// $senha = 'Bancodedados-2022';

$servidor = "localhost";
$banco = "tcc";
$us = "root";
$senha = '';


try{
    $serv = new PDO("mysql:host=".$servidor.";dbname=".$banco,$us,$senha);
    $serv->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e ->getMessage();
}