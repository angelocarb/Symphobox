<?php
session_start();
include "config_locale.php";
$utente_loggato = $_SESSION["Utente"];

$query_azzera_notifiche = "UPDATE risposte SET Letto = '1' WHERE Richiedente = '$utente_loggato'";
if(mysqli_query($db_server , $query_azzera_notifiche)){
	
	
}else{
	header('location: ../index.php?p=homepage&m=$query_azzera_notifiche');
		die();
}

?>