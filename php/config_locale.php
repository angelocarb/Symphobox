<?php

$db_hostname = 'localhost';   //nome del server
$db_username = 'root';
$db_password = NULL;
$db_database = 'symphobox';  //nome del DB      


$db_server = mysqli_connect($db_hostname ,$db_username , $db_password , $db_database ); //connessione al DB
if(!$db_server)  //controllo che la connessione al DB vada a buon fine
		die("Impossibile connettersi al Database");
		
?>