<?php
if(isset($_GET["trovato"])){
include "config_locale.php";
	$regione = strtolower($_POST["regione"]);
	$stringa_input = strtolower($_POST["stringa"]);
	$genere = strtolower($_POST["str_genere"]);
/*cerca risultati valutando contemporaneamente tutti e tre i campi inseriti*/
$query_cerca = "SELECT* FROM annunci a INNER JOIN users u ON a.Caricatore = u.Utente WHERE UPPER(TitoloAnnuncio) LIKE UPPER('%$stringa_input%') OR Genere LIKE UPPER('%$genere%') OR Regione = '$regione'";
	$result_set = mysqli_query($db_server , $query_cerca);
	$trovati = mysqli_num_rows($result_set);
echo"<div id = 'schermo_opaco' class = 'modal'>
		<div class = 'modal_content_annunci_trovati'>";
	if($trovati > 0){
		while($row = mysqli_fetch_array($result_set)){
			$anteprima_content = substr($row["TestoAnnuncio"],0,400);
			echo "<div class = 'annuncio'> 
				<img src = '$row[ImmagineProfilo]' class = 'foto_richiedente' alt='immagine_profilo'> </img>
						<div class = 'titolo_annuncio'>$row[TitoloAnnuncio]</div>
						<div class = 'info_annuncio'> <div class = 'data_caric_annuncio'> <img class = 'icona_orologio' src = '../immagini/icona_orologio.png' alt='icona_orologio'> </img> &nbsp $row[DataUpload]</div> <div class = 'caricatore'> <img class = 'icona_caricatore' src = '../immagini/icona_caricatore.png' alt='icona_caricatore'> </img> &nbsp $row[Caricatore]</div> </div>
						<div class = 'testo_anteprima'> $anteprima_content... </div>
						<a href = 'index.php?p=annunci&page=2&id=$row[IDannuncio]&ris=settata' class = 'on_click'> <img class = 'freccia_destra' src = '../immagini/freccia-destra.png' alt='freccia'> </img> Continua a leggere ... </a>
				</div>";
		}
	}else{
		header("location: ../index.php?p=annunci&page=2&m=NESSUN ANNUNCIO TROVATO");
		die();
	}
echo"</div>
	</div>";
}

?>



<?php
include "config_locale.php";
/* prelevo l'annuncio e l'immagine profilo del caricatore e sue informazioni dall'ID recuperato dal GET */
if(isset($_GET["id"])){
$id = $_GET["id"];
$query_preleva = "SELECT* FROM annunci a INNER JOIN users u on a.Caricatore = u.Utente WHERE IDannuncio = '$id'";
if(mysqli_query($db_server , $query_preleva)){
	$result_set = mysqli_query($db_server , $query_preleva);
	$row = mysqli_fetch_array($result_set);
	if(isset($_GET['ris'])){
		echo"<div id = 'schermo_opaco' class = 'modal'>
			<div class = 'modal_content_risposta_annuncio'>
			<img class = 'foto_risposta_annuncio' src = '../$row[ImmagineProfilo]' alt='foto'> </img>
			<h4 id = 'title_on_read'> $row[TitoloAnnuncio] </h4> </br>
			<div class = 'testo_risposta_annuncio'> $row[TestoAnnuncio] </div></br> </br> </br>
				<form class = 'form_ris_annu' action = 'php/risposta_annuncio_process.php?&request=$row[Utente]' method='POST'>
					<textarea class = 'ris_annuncio' rows='4' cols='50' name = 'rispo_annu' onclick = scomparsa_value('ris_annuncio')> Rispondi... </textarea> </br> </br> </br> </br> </br>
					<input class = 'button_ris' type = 'submit' value = 'Rispondi'> </input>
				</form>
				<div class = 'info_annu_on_answer'>
					genere:$row[Genere] </br> </br>
					regione:$row[Regione] </br> </br>
					preferenze:$row[Preferenze] </br> </br>
					dove:$row[Comune]($row[Provincia])
				</div>
			</div>
			</div>";
	}
}
}

?>

<?php
if(isset($_GET['idnotify'])){
	/* prelevo l'annuncio relativo alla notifica a cui mi hanno risposto (tramite l'IDrisposta mandato con il GET) e lo stampa a video*/
	$idnotify = $_GET['idnotify'];
	$richiedente = $_SESSION["Utente"];
	$query_preleva_risposta = "SELECT* FROM Risposte WHERE IDrisposta = '$idnotify'";
	$result_ris = mysqli_query($db_server ,$query_preleva_risposta);
	$riga = mysqli_fetch_array($result_ris);
	echo"<div id = 'schermo_opaco' class = 'modal'>
			<div class = 'modal_content_risposta_a_notifica'>
			<img id = 'foto_lettera' src = '../immagini/icona_messaggio.png' alt='foto_lettera'> </img> </br>
			<div id = 'answer'> $riga[Testo] </div>
			</div>
		</div>";
	}
?>

<?php 
include "config_locale.php";
if(isset($_GET['m'])){
	
	echo"<div id = 'schermo_opaco' class = 'modal'>
		<div class = 'modal_content'>
		<div id = 'logo_on_register'> </div>
		<h4> ".$_GET['m']." </h4>
		</div>
		</div>";
}
?>

<form id="form_cerca_annuncio" method = "POST" action = "index.php?p=annunci&page=2&trovato=true">
		<input type = "text" value = "Inserisci..." name = "stringa" id = "stringa_cercata" onclick = "scomparsa_value('stringa_cercata')"> </input>
		<select id = "select_regione" name = "regione">
			<option value = "non definito"> Non definito </option>
			<option value="Abruzzo">Abruzzo</option>
			<option value="Basilicata">Basilicata</option>
			<option value="Calabria">Calabria</option>
			<option value="Campania">Campania</option>
			<option value="Emilia-Romagna">Emilia-Romagna</option>
			<option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
			<option value="Lazio">Lazio</option>
			<option value="Liguria">Liguria</option>
			<option value="Lombardia">Lombardia</option>
			<option value="Marche">Marche</option>
			<option value="Molise">Molise</option>
			<option value="Piemonte">Piemonte</option>
			<option value="Puglia">Puglia</option>
			<option value="Sardegna">Sardegna</option>
			<option value="Sicilia">Sicilia</option>
			<option value="Toscana">Toscana</option>
			<option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
			<option value="Umbria">Umbria</option>
			<option value="Valle D'Aosta">Valle D'Aosta</option>
			<option value="Veneto">Veneto</option>
		</select>
		<input type = "text" value = "Genere..." name = "str_genere" id = "stringa_genere" onclick = "scomparsa_value('stringa_genere')"> </input>
		<input type = "submit" value = "CERCA" id = "pulsante_submit_annuncio"> </input>
</form>

<div id = "content_generale">
	<div id = "content_annunci">
		<?php
		include "config_locale.php";
		$number_page = $_GET["page"];
		$number_page = ($number_page *5);
		$query_preleva_annuncio = "SELECT* FROM annunci a INNER JOIN users u ON a.Caricatore = u.Utente ORDER BY DataUpload DESC LIMIT $number_page";
		if(mysqli_query($db_server , $query_preleva_annuncio)){
			$result = mysqli_query($db_server , $query_preleva_annuncio);
			for($i=0;$row = mysqli_fetch_array($result);$i++){
			$anteprima_content = substr($row["TestoAnnuncio"],0,400);
			echo "<div id = '$i' class = 'annuncio'> 
						<img src = '$row[ImmagineProfilo]' class = 'foto_richiedente' alt='profilo'> </img>
						<div class = 'titolo_annuncio'>$row[TitoloAnnuncio] </div>
						<div class = 'info_annuncio'> <div class = 'data_caric_annuncio'> <img class = 'icona_orologio' src = '../immagini/icona_orologio.png' alt='icona_orologio'> </img> &nbsp $row[DataUpload] </div> <div class = 'caricatore'> <img class = 'icona_caricatore' src = '../immagini/icona_caricatore.png' alt='icona_caricatore'> </img> &nbsp $row[Caricatore] </div> </div>
						<div class = 'testo_anteprima'> $anteprima_content... </div>
						<a href = 'index.php?p=annunci&id=$row[IDannuncio]&page=2&ris=settata' class = 'on_click'> <img class = 'freccia_destra' src = '../immagini/freccia-destra.png' alt='freccia'> </img> Rispondi... </a>";
						if(isset($_SESSION["Utente"])){
							$utente = $_SESSION["Utente"];
							if($row["Caricatore"] == $utente){
								echo "<a class = 'delete_annu' href='php/delete_annu.php?id=$row[IDannuncio]'> Elimina </a>";
							}
						}
						echo "</div>";
			
		}
	}
?>


<?php 
	$query_totale_annunci= "SELECT* FROM annunci a INNER JOIN users u ON a.Caricatore = u.Utente";
	$target = mysqli_query($db_server,$query_totale_annunci);
	$num_tot = mysqli_num_rows($target);
?>

<div id = "button_sfoglia<?php echo $_GET['page'];?>" class = "button_sfoglia" onclick = "sfoglia(this , <?php echo $num_tot ?>)"> SFOGLIA </div>
</div>
	
	<div id = "ultimi_inseriti">
	<?php
		$query_ultimi_inseriti = "SELECT* FROM annunci a INNER JOIN users u ON u.Utente = a.Caricatore ORDER BY DataUpload DESC LIMIT 5";
		if(mysqli_query($db_server,$query_ultimi_inseriti)){
			$result = mysqli_query($db_server , $query_ultimi_inseriti);
			echo "<h4> AGGIUNTI DI RECENTE </h4>";
			while($row = mysqli_fetch_array($result)){
			 $row["TitoloAnnuncio"] = substr($row["TitoloAnnuncio"],0,100);
				echo "<img src = '$row[ImmagineProfilo]'  class = 'foto_ultimi' alt='profilo'> </img>
				<div  class = 'info_ultimi'> 
					<a href = 'index.php?p=annunci&page=2&id=$row[IDannuncio]&ris=settata' class='title_ultimo'> $row[TitoloAnnuncio] </a> </br> </br> </br> <div class = 'data_ultimo'> $row[DataUpload] </div>
				</div> </br> </br> </br> <div class = 'sep'> </div> </br>";
			}
		}
	
	
	?>

	</div>



	
</div>














