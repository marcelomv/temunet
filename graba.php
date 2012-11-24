<?php

$web = $_POST['web'];
$des = $_POST['descripcion'];
$tag = $_POST['tags'];

/*
$web = "http://www.rinconastur.com/php/index.php";
$des = "manejo de bases de datos sqlite y mysql al mismo tiempo";
$tag = "sqlite mysql php";
*/

$database = new PDO('sqlite:db/datos.db3');

$sql = 'INSERT INTO paginasweb (web, titulo, tags) 
        VALUES ("'.$web.'", "'.$des.'", "'.$tag.'");';

//echo $sql;

$database->query($sql);

header("Location: index.php");
?>

