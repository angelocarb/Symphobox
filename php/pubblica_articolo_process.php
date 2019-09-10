<?php
session_start();
include "config_locale.php";
include "filtro.php";
$titolo = filtra(mysqli_real_escape_string($db_server ,$_POST["title_art"]));
$contenuto = filtra(mysqli_real_escape_string($db_server ,$_POST["testo_art"]));

$img_anteprima = $_FILES['anteprima']['name'];
$img_left = $_FILES['left']['name'];
$img_right = $_FILES['right']['name'];

$img_anteprima = str_replace(' ' ,'',$img_anteprima);
$img_left= str_replace(' ' ,'',$img_left);
$img_right = str_replace(' ' ,'',$img_right);

$percorso_anteprima="immagini/anteprime_articoli/$img_anteprima";
$percorso_left="immagini/left_right/$img_left";
$percorso_right="immagini/left_right/$img_right";

$autore = $_SESSION["Utente"];

	$query_inserisci_articolo = "INSERT INTO articoli(Autore ,Titolo , Contenuto , ImmagineAnteprima , Img_left , Img_right)VALUES('$autore','$titolo','$contenuto','$percorso_anteprima','$percorso_left','$percorso_right') ";
	if(mysqli_query($db_server,$query_inserisci_articolo)){
		copy($_FILES['anteprima']['tmp_name'] , "../immagini/anteprime_articoli/".$img_anteprima) or die("impossibile caricare il file");
		copy($_FILES['left']['tmp_name'] , "../immagini/left_right/".$img_left) or die("impossibile caricare il file");
		copy($_FILES['right']['tmp_name'] , "../immagini/left_right/".$img_right) or die("impossibile caricare il file");
		header('location: ../index.php?p=admin&s=gestione&m=ARTICOLO PUBBLICATO');
		die();
	}





?>