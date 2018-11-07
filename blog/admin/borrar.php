<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'config.php';
require '../config.php';
require '../functions.php';

session_start();

if (isset($_SESSION['username'])) {

    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('location: ../error.php');
    }

  $id = limpiarDatos($_GET['id']);

    if(!id){

        header('Location:' . RUTA . 'admin');
    }

    $statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
    $statement->execute(array('id' => $id));

    header('Location:' . RUTA . 'admin');


}else  {

    header('location:'.RUTA.'index.php');

}





?>