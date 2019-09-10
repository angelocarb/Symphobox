<?php
session_start();
include "config_locale.php";
$comment_to_delete = $_GET["id"];
$idArticoloToRedirect = $_GET["toRedirect"];

	
	$query_delete_like_of_comment = "DELETE FROM likes WHERE IDcommento = $comment_to_delete";
	if(mysqli_query($db_server,$query_delete_like_of_comment )){
		$query_delete_comment = "DELETE FROM commenti WHERE IDcommento = $comment_to_delete";
		mysqli_query($db_server , $query_delete_comment);
		header("location: ../index.php?p=lettura_articolo&page_comment=2&id=$idArticoloToRedirect&m=COMMENTO ELIMINATO");
		die();
	}




	









?>