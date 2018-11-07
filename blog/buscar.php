<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);
if(!$conexion){
    header('location: error.php');
}


if ($_SERVER ['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
    $busqueda = limpiarDatos($_GET['busqueda']);

    $pdo_statement = $conexion->prepare(
        'SELECT * FROM articulos WHERE titulo LIKE :busqueda OR texto LIKE :busqueda ');
    $pdo_statement->execute(array(':busqueda' => "%$busqueda%"));
    $result = $pdo_statement->fetchAll();

    if (empty($result)){
        $titulo = 'No results found:' .$busqueda;
    }else{
        $titulo = 'Results:' . $busqueda;
    }
}else{
    header('location:' . RUTA . 'index.php');
}






require 'views/buscar.view.php';

?>































