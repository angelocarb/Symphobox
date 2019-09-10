<?php
include 'config_locale.php';
include "filtro.php";

$messaggio = mysqli_real_escape_string($db_server,$_GET["m"]);
$messaggio = filtra($messaggio);
$mittente = $_SESSION["Utente"];

$query_insert_mex = "INSERT INTO chat(Mittente , testo) VALUES('$mittente' , '$messaggio')";
mysqli_query($db_server ,$query_insert_mex);

?>


