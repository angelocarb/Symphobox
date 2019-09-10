<?php
if(isset($_GET['ris'])){
		echo"<div id = 'schermo_opaco' class = 'modal'>
				<div class = 'modal_content_pubbl_annuncio'>
				
				<img id = 'img_pubbl_annu' src = '../immagini/1.png' alt ='image'> </img>
					<form id='form_pubblica_annuncio' method = 'POST' action = 'php/pubblica_annuncio_process.php'>
						<input id = 'titolo_annu' name = 'title_annu' type = 'text' value = 'titolo' onfocus= this.value=''> </input> </br> </br>
						<input id = 'prov_annu' name = 'prov_annu' type = 'text' value = 'provincia' onfocus= this.value=''> </input> </br> </br>
						<input id = 'comu_annu' name = 'comu_annu' type = 'text' value = 'comune' onfocus= this.value=''> </input> </br> </br> 
						<input id = 'regione_annu' name = 'reg_annu' type = 'text' value = 'regione annuncio' onfocus= this.value=''> </input> </br> </br>
						<textarea id = 'input_annuncio' name = 'testo_annu' rows='7' cols='50' onfocus=this.value=''> testo </textarea> </br>
						<textarea id = 'input_genere' name='gen_annu' rows='5' cols='50' onfocus=this.value=''> genere </textarea> </br>
						<input id = 'prefer_annu' name='pref_annu' type = 'text' value = 'preferenze' onfocus=this.value=''> </input> </br> </br>
						<input id='pubblica_annu' type = 'submit' value = 'Pubblica'> </input>
					</form>
					
			
			
			
				</div>
			</div>";
	}
?>




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

<div id = "content_dati">
	<img id = "immagine_profilo_in_profilo" src = "<?php
	echo $_SESSION['ImmagineProfilo'];
	?>" alt = "profilo"> </img>
	<img id = "button_upload" src = "../immagini/freccia_upload.png" onclick = "carica_annuncio()" alt = "button"> </img>
		<fieldset id = "img_profilo">
				<form id = "aggiorna_img_profilo" method = "POST" action = "php/aggiorna_img_profilo.php" enctype = "multipart/form-data">
					<input type="file" accept="image/png,image/gif,image/jpeg" name="file" id="change_img">
					<input type="submit" id="input_change_img_profilo_submit" value="AGGIORNA IMMAGINE">
				</form>
		</fieldset>
		
		
		</br>
		

		
		<form id = "aggiorna_info_profilo" method = "POST" action = "php/aggiorna_info_profilo.php" enctype = "multipart/form-data">
			<fieldset id = "info_profilo">
				</br>
				<label> Nome Utente </label>
				<input type="text" id="nome_utente" name="nome_utente" value = "<?php echo $_SESSION['Utente']; ?>" disabled> </input> </br>
				<label> Nome </label>
				<input type = "text" id = "nome" name = "nome" value = "<?php echo $_SESSION['Nome']; ?>"> </input>
				<label> Cognome </label>
				<input type = "text" id = "cognome" name = "cognome" value = "<?php echo $_SESSION['Cognome']; ?>"> </input>
				<label> Data registrazione </label>
				<input type = "text" id = "data_reg" name = "data_reg" value = "<?php echo $_SESSION['Data_reg']; ?>"  disabled> </input>
				<label> Annunci caricati </label>
				<input type = "text" id = "annunci_caricati" name = "video_caricati" value = "<?php  ?>"disabled> </input>
				<label> Articoli caricati </label>
				<input type = "text" id = "articoli_caricati" name = "articoli_caricati" disabled> </input>
				<label> Iscritti al canale </label>
				<input type = "text" id = "iscritti_al_canale" name = "iscritti_al_canale" disabled> </input>
				<input type="submit" value="AGGIORNA INFORMAZIONI" id="button_aggiorna_info">
			</fieldset>
		</form>
		</br>
		<form id = "aggiorna_password" method = "POST" action = "php/aggiorna_password.php" enctype = "multipart/form-data">
		<fieldset id = "fieldset_password">
			</br>
			<label> Vecchia password </label>
			<input type = "password" id = "vecchia_password" name = "vecchia_password"> </input>
			<label> Nuova password </label>
			<input type = "password" id = "nuova_password" name = "nuova_password"> </input>
			<label> Conferma nuova password </label>
			<input type = "password" id = "conferma_nuova_password" name = "conferma_nuova_password"> </input>
			<input type="submit" value="AGGIORNA PASSWORD" id="button_aggiorna_password">
		</fieldset>
		
		</form>
		
		
		
		
		
			
		
		
		
		
		
		
		
		
		
		
</div>
		
