<?php

/* aggiorna i likes in tempo reale relativi al click , quindi fa Likes + 1 */
session_start();
include "config_locale.php";

$count = 0;

$controllo = "SELECT Likes FROM commenti";
$result = mysqli_query($db_server , $controllo); 
while(mysqli_fetch_row($result)){
	$count++;
}

$contatore = array("$count");
$data = json_encode($contatore);
echo $data;

?>