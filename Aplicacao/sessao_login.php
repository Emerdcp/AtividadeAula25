<?php 
session_start();
if(!isset($_SESSION['cli_cpf'])){

    //echo "teste";
    header("location: login.php");
}
?>