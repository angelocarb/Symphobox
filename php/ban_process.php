<?php
include "config_locale.php";
include "filtro.php";

$bannato = filtra(mysqli_real_escape_string($db_server,$_POST["Nome_utente_bannato"]));


			$query_ban = "UPDATE users SET Ban = !Ban WHERE Utente = '".$bannato."'";
			if(mysqli_query($db_server , $query_ban)){
					header('location: ../index.php?p=admin&s=ban&m=AZIONE COMPIUTA');
					die();
				
			}
			
?>