<?php
session_start();
if(!isset($_SESSION['usuarioLog'])){
    header('location: index.php');
    session_destroy();
}
if(isset($_GET['sair'])){
    session_destroy();
    header('location:index.php');
}
include_once 'public/layout/layout.php';
include_once 'public/layout/menu.php';
?>
