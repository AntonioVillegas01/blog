<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//archivo index del ADMIN

require 'config.php';
require '../config.php';
require '../functions.php';

session_start();

if (isset($_SESSION['username'])) {




    $conexion = conexion($bd_config);



    if (!$conexion){
        header('location ../error.php');
    }

    $posts = obtener_post($blog_config['post_por_pagina'], $conexion);



    require '../views/admin.view.php';
}else{
    header('location:'.RUTA.'index.php');
}



?>