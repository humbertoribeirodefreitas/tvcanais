<?php

if (!isset($_SERVER['HTTP_REFERER']) &&  !strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST'] ) 
    || !strpos($_SERVER['HTTP_REFERER'], 'lista.php' )) {
    header('HTTP/1.0 403 Forbidden');
    header("Location: ../index.php");
    die();
}

require_once('listas.php');

$id = $_POST['id'];

$usuarios= obterListaUsuarios($id);
if ($usuarios) { 
    echo json_encode($usuarios);
}