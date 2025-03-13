<?php 

session_start();
if(!isset($SESSION['usuario'])|| $SESSION ['usuario'] == ''){
    header("Location:index.php")
    die;
}

if(!isset($SESSION['senha'])|| $SESSION ['senha'] == ''){
    header("Location:index.php")
    die;
}

?>