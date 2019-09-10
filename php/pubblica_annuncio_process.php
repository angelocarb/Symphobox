<?php
session_start();
include "config_locale.php";
include "filtro.php";

$titolo_annuncio = filtra(mysql_escape_string($_POST["title_annu"]));
$testo_annuncio = filtra(mysql_escape_string($_POST["testo_annu"]));
$genere_annuncio = filtra(mysql_escape_string($_POST["gen_annu"]));
$prefer_annu = filtra(mysql_escape_string($_POST["pref_annu"]));
$caricatore = filtra(mysql_escape_string($_SESSION["Utente"]));
$regione_annuncio = filtra(mysql_escape_string($_POST["reg_annu"]));
$provincia_annuncio = filtra(mysql_escape_string($_POST["prov_annu"]));
$comune_annuncio = filtra(mysql_escape_string($_POST["comu_annu"]));



$query_insert_annu = "INSERT INTO annunci(Caricatore , Genere , Preferenze , TestoAnnuncio , TitoloAnnuncio , Regione , ProvinciaAnnuncio , ComuneAnnuncio) 
					VALUES('$caricatore' , '$genere_annuncio' , '$prefer_annu', '$testo_annuncio' , '$titolo_annuncio' ,'$regione_annuncio' , '$provincia_annuncio' , '$comune_annuncio')";
if(mysqli_query($db_server , $query_insert_annu)){
	header('location: ../index.php?p=annunci&page=2&m=ANNUNCIO INSERITO');
	die();
}



?>

