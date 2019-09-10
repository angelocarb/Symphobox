<?php
include "config_locale.php";
$id = $_GET["id"];



$query_delete_annu = "DELETE FROM annunci WHERE IDannuncio = '$id'";
if(mysqli_query($db_server ,$query_delete_annu)){
	header("location: ../index.php?p=annunci&page=2&m=ANNUNCIO ELIMINATO");
		die();
}



?>