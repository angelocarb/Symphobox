<?php 
if(isset($_GET['m'])){
	echo"<div id = 'schermo_opaco' class = 'modal'>
		<div class = 'modal_content'>
		<div id = 'logo_on_register'> </div>
		<h4> ".$_GET['m']." </h4>
		</div>
		</div>";
}
?>

<?php
include "config_locale.php";
$ID = $_GET["id"];
$query_preleva = "SELECT* FROM articoli a INNER JOIN  users u ON a.autore = u.Utente WHERE IDarticolo = '$ID'";
if(mysqli_query($db_server , $query_preleva)){
	$result = mysqli_query($db_server , $query_preleva);
	while($row = mysqli_fetch_array($result)){
	$autore = $row[1];
	$titolo = $row[2];
	$contenuto = $row[3];
	$dataPubl = $row[4];
	$nome_aut = $row[9];
	$cognome_aut = $row[10];
	$img_left = $row[6];
	$img_right = $row[7];
	if(isset($_SESSION["Utente"])){
		$img_profilo = $_SESSION["ImmagineProfilo"];
	}else
		$img_profilo = "../immagini/foto_profilo_uomo.png";

	
	$lung_testo = strlen($contenuto);
	$meta_stringa = floor($lung_testo/2);
	
	$str1 = substr($contenuto , 0 , $meta_stringa-1);
	$str2 = substr($contenuto , $meta_stringa);
	}
	
	/* conto i commenti rilasciati per l'articolo */
	$query_count_comments = "SELECT count(*) as total FROM commenti WHERE Articolo_riferito = '$ID'";
	$res = mysqli_query($db_server , $query_count_comments);
	$data = mysqli_fetch_assoc($res);
	
	
}
?>

<div id = "content_lettura_articolo">
<h5> <?php echo $titolo ?> </h5> 
<img src = "<?php echo $img_left ?>" id = "img_left" alt="img_left"> </img> 
<?php echo $str1 ?>
<img src = "<?php echo $img_right ?>" id = "img_right" alt="img_right"> </img>
<?php echo $str2 ?>
</br> </br>

<div id = "firma_articolo"> <?php echo $nome_aut." ".$cognome_aut?> </div> </br> </br>

<div id = "content_commenti"> 
<?php echo $data['total']." "."Comments" ?> 
</br> </br>
<img src = "<?php echo $img_profilo ?>" id = "foto_profilo_comments" alt="profilo"> </img>
<div id = "content_textarea" onclick = "mostra_pulsante_comment()">
	<form id="comment_form" method = "POST" action = "php/comment_process.php?&id=<?php echo $ID ?>">
		<textarea rows="4" cols="80" name = "commento" id = "input_comment" onfocus = "scomparsa_value('input_comment')">Add a comment...</textarea>
		<input type = "submit" value = "POST" id = "post"> </input>
	</form>
</div>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br>

<?php

/* estraggo i commenti dell'articolo e i like di ogni commento */
if(isset($_SESSION["Utente"])){
$loggato = $_SESSION["Utente"];
$number_page = $_GET["page_comment"];
$number_page = ($number_page *5);
$query_estrai_tutti = "SELECT* FROM commenti WHERE Articolo_riferito = $ID LIMIT $number_page";

if(mysqli_query($db_server , $query_estrai_tutti)){
		$result_set = mysqli_query($db_server , $query_estrai_tutti);
		while($row = mysqli_fetch_array($result_set)){
			$query_on_loggato = "SELECT COUNT(*) as numero FROM commenti c NATURAL JOIN likes l  WHERE Articolo_riferito = '$ID' AND l.Utente = '$loggato' AND l.IDcommento=".$row["IDcommento"];
			$resultset = mysqli_query($db_server , $query_on_loggato);
			$riga = mysqli_fetch_array($resultset);
			$str_comment = trim($row['TestoCommento']);
		echo "<script type='text/javascript' src='../javascript/aggiorna_likes.js'> </script>";
			echo"<div id = 'div_info_comment'> <div class = 'caricatore_commento'> $row[Caricatore] </div> <div class = 'DataPubbl'> $row[DataPubbl] </div>"; 
			if($row["Caricatore"] == $_SESSION["Utente"])
				echo"<a href = 'php/delete_comment_process.php?id=$row[IDcommento]&toRedirect=$row[Articolo_riferito]' class = 'delete_comment'> Elimina </a>";
		echo"</div>";
		echo"<div class = 'comment_on_video'>$str_comment</div>
			<div id = 'tasto_like' class = 'push'>";
				
		if($riga["numero"]!=0)	
				echo"<img src = '../immagini/cuore_like_pieno.png' class = 'cuore_like_pieno' id = '$row[IDcommento]' onclick = 'aggiornaLikes(this)'> </img>";
		else
				echo"<img src = '../immagini/cuore_like.png' class = 'cuore_like' id = '$row[IDcommento]' onclick = 'aggiornaLikes(this)'> </img>";
		
		echo "$row[Likes] Likes
				</div>
			
			
			<br> <br>";
		}
	}
}

/* controllo se ci sono commenti relativi all'articolo per stampare o meno il bottono sfoglia*/
if(isset($_SESSION["Utente"])){
$query_control_if_exists = "SELECT COUNT(*) as numero FROM commenti WHERE Articolo_riferito = $_GET[id]";
$result = mysqli_query($db_server , $query_control_if_exists);
$target = mysqli_fetch_array($result);
if($target["numero"] > 5){
	echo "<div id = 'button_sfoglia_comm2' class = 'button_sfoglia_comment' onclick = 'sfoglia_comments(this,$target[numero],$ID)'> SFOGLIA </div>";
}
}
?>


	
</div>