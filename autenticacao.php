<?php 

session_start();
if(!isset($SESSION['cpf'])|| $SESSION ['cpf'] == ''){
    header("Location:index.php")
    die;
}

if(!isset($SESSION['senha'])|| $SESSION ['senha'] == ''){
    header("Location:index.php")
    die;
}

?>