<?php

$dsn="mysql:host=localhost;dbname=hotels";
$user="root";
$password="";

try{
    $db=new PDO($dsn,$user,$password);
    echo"it's connect";
}
catch(PDOExeption $e){
    die("Eror :".$e->getMessage()) ;
}



?>
