<?php
session_start();
include "config_locale.php";

$id = $_GET["ID"]; /* ID del commento */
/* aggiorna il contatore Likes nella Tabella Commenti */
$query_aggiorna = "UPDATE commenti SET Likes = Likes - '1' WHERE IDcommento = '$id'";
mysqli_query($db_server , $query_aggiorna);

/* aggiorna la tabella che ti mantiene i Like relativi a quell'Utente Loggato */

$utente_loggato = $_SESSION["Utente"];

$query_togli_loggato = "DELETE FROM Likes WHERE  IDcommento = '$id' AND Utente = '$utente_loggato'";
echo $query_togli_loggato;
mysqli_query($db_server , $query_togli_loggato);




?>