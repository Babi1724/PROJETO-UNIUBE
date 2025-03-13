<?php 

if(!isset($_POST['usuario']) || $_POST['usuario'] == '')
    die("favor, informar o usuario")

if(!isset($_POST['senha']) || $_POST['senha'] == '')
    die("favor, informar a senha")

if($_POST['usuario'] =='123' && $_POST['senha'] == '123'){
    session_start();

    $SESSION['usuario'] = $SESSION['usuario'];
    $SESSION['senha'] = $SESSION['senha'];

    header("Location:principal.php");
    die;
} else{
    die("usuario e senha incorretos");
}
    
?>