<?php
include "config_locale.php";

/*conto gli utenti bannati */

$query_count_ban = "SELECT* FROM users WHERE Ban = 1";
$result = mysqli_query($db_server , $query_count_ban);
$numero = mysqli_num_rows($result);


?>

<div id = "content_pubblica_articolo">
			<h6>INSERISCI IL NOME UTENTE </h6> </br>
			<form id = 'ban_form' method = 'POST' action = 'php/ban_process.php'>
				 <input id = 'input_nome_utente_bannato' type = 'text' name = 'Nome_utente_bannato' autocomplete= 'off'> </input> </br> </br>
				<input id = 'input_ban' name = 'ban' type = 'submit' value = 'BANNA/TOGLI BAN'> </input>
			</form> 
			</br> </br> </br>
			<h3> Utenti Bannati: <?php echo $numero  ?> </h3> </br>
			<div id= "bannati"> 
			<?php
			$query_cerca_ban = "SELECT* FROM Users WHERE Ban = 1";
			$result = mysqli_query($db_server , $query_cerca_ban);
			while($row = mysqli_fetch_array($result)){
				echo $row["Utente"]."</br>";
			}
			
			
			?>
			
			</div>

</div>

