<?php
include "config_locale.php";
include "filtro.php";

$article = filtra(mysqli_real_escape_string($db_server,$_POST["articolo"]));

$query_delete_article = "DELETE FROM articoli WHERE Titolo = '$article'";
	echo $query_delete_article;
if(mysqli_query($db_server ,$query_delete_article )){
	header("location: ../index.php?p=admin&s=gestione&m=ARTICOLO ELIMINATO");
	die();
}else{
	header("location: ../index.php?p=admin&s=gestione&m=ARTICOLO INESISTENTE");
	die();
}





?>