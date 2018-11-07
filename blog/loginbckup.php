<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST ['usuario']) ;
    $password = limpiarDatos($_POST ['password']) ;

    if ($usuario == $blog_admin ['usuario'] && $password == $blog_admin['password']) {
        session_start();
        $_SESSION['login_user']= $blog_admin ['usuario'];
        header('location: ' . RUTA . 'admin');
    }
}




require 'views/login.view.php';







?>