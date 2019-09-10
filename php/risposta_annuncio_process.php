<?php
session_start();
include "config_locale.php";
include "filtro.php";
$risposta_annuncio = filtra(mysqli_real_escape_string($db_server,$_POST['rispo_annu']));
if(isset($_SESSION["Utente"])){
	$interlocutore = $_SESSION['Utente'];
}else{
	header('location: ../index.php?p=annunci&page=2&m=EFFETTUA PRIMA IL LOGIN'); 
			die();
}
	
	

$request = $_GET["request"];



$query = "INSERT INTO Risposte( Richiedente , Interlocutore ,Testo , Letto) VALUES('$request' , '$interlocutore' , '$risposta_annuncio' , 0)";
		if(mysqli_query($db_server , $query)){
			header('location: ../index.php?p=annunci&page=2&m=RISPOSTA INVIATA IN ATTESA DI ESSERE LETTA'); /* reindirizzamento se tutto va a buon fine */
			die();
		}
		


?>