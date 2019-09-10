<?php
session_start();
include "config_locale.php";


$nome = $_FILES['file']['name'];
$nome = str_replace(' ' ,'',$nome);
$percorso="immagini/immagini_profilo/$nome";

if((trim($_FILES["file"]["name"]) == "")){
	header('location: ../index.php?p=profilo&m=SCEGLI FILE!');
	die();
	
}
else{
	$query_aggiorna_percorso = "UPDATE users SET ImmagineProfilo = '".$percorso."' WHERE Utente = '".$_SESSION['Utente']."'";
	if(mysqli_query($db_server,$query_aggiorna_percorso)){
		$_SESSION['ImmagineProfilo'] = "immagini/immagini_profilo/$nome";
		copy($_FILES['file']['tmp_name'] , "../immagini/immagini_profilo/".$nome) or die("impossibile caricare il file");
		$query = "SELECT* FROM users WHERE Utente = '$nome_utente'";
		$result = mysqli_query($db_server , $query);
		$row = mysqli_fetch_row($result);
		header('location: ../index.php?p=profilo&m=IMMAGINE DEL PROFILO AGGIORNATA');
	die();
}
}

?>