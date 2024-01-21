<?php  
session_start();

session_destroy(); // Detruire la session

header('location:login.php');// On redirige

?>