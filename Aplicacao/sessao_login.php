<?php 
session_start();
if(!isset($_SESSION['cli_nome'])){
    header("location: login.php");
}
?>