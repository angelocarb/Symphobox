<?php
session_start();
include "config_locale.php";

$count = 0;
$utente_loggato = $_SESSION["Utente"];


$controllo = "SELECT* FROM risposte WHERE Richiedente = '$utente_loggato' AND Letto = '0'";
$result = mysqli_query($db_server , $controllo); 
while(mysqli_fetch_row($result)){
	$count++;
}

$contatore = array("$count");
$data = json_encode($contatore);
echo $data;

?>