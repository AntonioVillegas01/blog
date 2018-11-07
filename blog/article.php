<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if(!$conexion){
    header('location: error.php');
}


if (empty($id_articulo)){
    header('location: index.php');
}

$posts =  obtener_post_por_id($conexion, $id_articulo);

if (!$posts){
    header('location: index.php');
}

$posts = $posts[0];

require 'views/article.view.php';

?>