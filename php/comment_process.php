<?php
session_start();
include "config_locale.php";
include "filtro.php";
$commento = mysql_escape_string($_POST["commento"]);
$commento = filtra($commento);
$IDcommento = $_GET["id"];
$utente = $_SESSION['Utente'];



$query_ins_commento = "INSERT INTO commenti(Caricatore , TestoCommento , Likes , Articolo_riferito) VALUES ('$utente','$commento' , 0 ,'$IDcommento')";
	if(mysqli_query($db_server , $query_ins_commento)){
		header("location: ../index.php?p=articoli&page=2&m=COMMENTO INSERITO");  /* reindirizzamento se tutto va a buon fine */
		die();
		
	}





?>