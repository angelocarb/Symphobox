<?php
include "config_locale.php";
/* prelevo l'annuncio e l'immagine profilo del caricatore e sue informazioni dall'ID recuperato dal GET */
$id = $_GET["id"];
$query_preleva = "SELECT* FROM annunci a INNER JOIN users u on a.Caricatore = u.Utente WHERE IDannuncio = '$id'";
if(mysqli_query($db_server , $query_preleva)){
	$result_set = mysqli_query($db_server , $query_preleva);
	$row = mysqli_fetch_array($result_set);
	if(isset($_GET['ris'])){
		echo"<div id = 'schermo_opaco' class = 'modal'>
			<div class = 'modal_content_risposta_annuncio'>
			<img class = 'foto_risposta_annuncio' src = '../$row[ImmagineProfilo]'> </img>
			<h4 id = 'title_on_read'> $row[TitoloAnnuncio] </h4> </br>
			<div id = 'testo_risposta_annuncio'> $row[TestoAnnuncio] </div></br> </br> </br>
				<form id = 'form_ris_annu' action = 'php/risposta_annuncio_process.php?&request=$row[Utente]' method='POST'>
					<textarea id = 'ris_annuncio' rows='4' cols='50' name = 'rispo_annu' onclick = scomparsa_value('ris_annuncio')> Rispondi... </textarea> </br> </br> </br> </br> </br>
					<input id = 'button_ris' type = 'submit' value = 'Rispondi'> </input>
				</form>
				<div id = 'info_annu_on_answer'>
					genere:$row[Genere] </br> </br>
					regione:$row[Regione] </br> </br>
					dove:$row[Comune]($row[Provincia])
				</div>
			</div>
			</div>";
	}
}

?>


<form id="form_cerca_annuncio" method = "POST" action = "index.php?p=ricerca_annuncio">
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
		<input type = "submit" value = "POST" id = "pulsante_submit_annuncio"> </input>
</form>

<div id = "content_generale">
	<div id = "content_annunci">
		<?php
		include "config_locale.php";
		$query_preleva_annuncio = "SELECT* FROM annunci a INNER JOIN users u ON a.Caricatore = u.Utente";
		if(mysqli_query($db_server , $query_preleva_annuncio)){
			$result = mysqli_query($db_server , $query_preleva_annuncio);
			while($row = mysqli_fetch_array($result)){
			$anteprima_content = substr($row["TestoAnnuncio"],0,400);
			echo "<div class = 'annuncio'> 
						<img src = '$row[ImmagineProfilo]' class = 'foto_richiedente'> </img>
						<div class = 'titolo_annuncio'>$row[TitoloAnnuncio] </div>
						<div class = 'info_annuncio'> <div class = 'data_caric_annuncio'> <img class = 'icona_orologio' src = '../immagini/icona_orologio.png'> </img> &nbsp $row[DataUpload] </div> <div class = 'caricatore'> <img class = 'icona_caricatore' src = '../immagini/icona_caricatore.png'> </img> &nbsp $row[Caricatore] </div> </div>
						<div class = 'testo_anteprima'> $anteprima_content... </div>
						<a href = 'index.php?p=risposta_annuncio&id=$row[IDannuncio]&ris=settata' class = 'on_click'> <img class = 'freccia_destra' src = '../immagini/freccia-destra.png'> </img> Rispondi... </a>
					</div>";
			
		}
	}
?>
	</div>
	
	<div id = "ultimi_inseriti">
	<?php
		$query_ultimi_inseriti = "SELECT* FROM annunci a INNER JOIN users u ON u.Utente = a.Caricatore ORDER BY DataUpload DESC LIMIT 6";
		if(mysqli_query($db_server,$query_ultimi_inseriti)){
			$result = mysqli_query($db_server , $query_ultimi_inseriti);
			while($row = mysqli_fetch_array($result)){
				echo "<img src = '$row[ImmagineProfilo]' id = 'foto_ultimi'> </img> </br> ";
			}
		}
	
	
	?>

	</div>



	
</div>


