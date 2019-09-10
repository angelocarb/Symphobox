<?php
session_start();
include "config_locale.php";
include "filtro.php";


$nuovo_nome = filtra($_POST['nome']);
$nuovo_cognome = filtra($_POST['cognome']);

$Utente = $_SESSION['Utente'];
$query_aggiorna_info = "UPDATE users SET Nome = '$nuovo_nome' , Cognome = '$nuovo_cognome' WHERE Utente = '$Utente'";
if(mysqli_query($db_server , $query_aggiorna_info)){
	$_SESSION['Nome'] = $nuovo_nome;
	$_SESSION['Cognome'] = $nuovo_cognome;
	header('location: ../index.php?p=profilo&m=INFORMAZIONI AGGIORNATE');
	die();
}







?>