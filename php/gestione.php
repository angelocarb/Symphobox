<?php
include "config_locale.php";

/*conto gli utenti bannati */

$query_count_ban = "SELECT* FROM users WHERE Ban = 1";
$result = mysqli_query($db_server , $query_count_ban);
$numero_ban = mysqli_num_rows($result);

/* conto gli utenti registrati */
$query_count_reg = "SELECT* FROM users";
$result = mysqli_query($db_server , $query_count_reg);
$numero_reg = mysqli_num_rows($result);

/* conto articoli inseriti */ 
$query_count_art = "SELECT* FROM articoli";
$result = mysqli_query($db_server , $query_count_art);
$numero_art = mysqli_num_rows($result);

/* conto annunci inseriti */
$query_count_annun = "SELECT* FROM annunci";
$result = mysqli_query($db_server , $query_count_annun);
$numero_annun = mysqli_num_rows($result);


?>

<div id = "content_pubblica_articolo">
		<h6>INSERISCI L'ARTICOLO DA ELIMINARE </h6> </br>
			<form id = 'ban_form' method = 'POST' action = 'php/delete_article_process.php'>
				 <input id = 'input_nome_utente_bannato' type = 'text' name = 'articolo' autocomplete= 'off'> </input> </br> </br>
				<input id = 'input_ban' name = 'ban' type = 'submit' value = 'ELIMINA'> </input>
			</form> 
		</br> </br>
		

			<h3> Utenti Bannati: <?php echo $numero_ban ?> </h3>
			<h3> Utenti registrati: <?php echo $numero_reg  ?> </h3>
			<h3> Articoli inseriti: <?php echo $numero_art ?> </h3>
			<h3> Annunci inseriti: <?php echo $numero_annun  ?> </h3>

</div>
