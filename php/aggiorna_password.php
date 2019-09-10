<?php
session_start();
include "config_locale.php";
include "filtro.php";

$vecchia_password = md5(filtra($_POST['vecchia_password']));



if(empty($_POST["vecchia_password"]) || empty($_POST["nuova_password"]) || empty($_POST["conferma_nuova_password"])){
	header("location: ../index.php?p=profilo&m=FORM INCOMPLETO!");
	die();
}
if(md5($_SESSION['Password']) == md5($vecchia_password)){
	$nuova_password = md5($_POST['nuova_password']);
	$conferma_nuova_password = md5($_POST['conferma_nuova_password']);
	$utente = $_SESSION['Utente'];
	if($nuova_password == $conferma_nuova_password){
		$query_aggiorna_password = "UPDATE users SET Pwd = '".$nuova_password."' WHERE Utente = '$utente'";
		mysqli_query($db_server , $query_aggiorna_password);
		header('location: ../index.php?p=profilo&m=PASSWORD CAMBIATA');
		die();
	}
	else{
		header('location: ../index.php?p=profilo&m=LA PASSWORD DI CONFERMA NON COINCIDE CON LA NUOVA PASSWORD');
		die();
	}
	
	
}
else{
	header('location: ../index.php?p=profilo&m=INSERITA VECCHIA PASSWORD ERRATA!');
		die();
	}






?>