<?php
session_start();
include "config_locale.php";


$utente = $_SESSION['Utente'];

$query = "UPDATE users SET loggato = '0' WHERE Utente = '".$utente."'";
mysqli_query($db_server , $query);



$_SESSION = array();
session_destroy();
header("location: ../index.php?p=annunci&page=2&m=LOGOUT EFFETTUATO");
exit();

?>