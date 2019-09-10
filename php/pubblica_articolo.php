<div id = "content_pubblica_articolo">
	<form id='form_pubblica_articolo' method = 'POST' action = 'php/pubblica_articolo_process.php' enctype = "multipart/form-data">
		<input id = 'titolo_art' name = 'title_art' type = 'text' value = 'titolo' onclick = "scomparsa_value('titolo_annu')"> </input> </br> </br>
		<textarea id = 'input_articolo' name = 'testo_art' rows='15' cols='77' > Scrivi... </textarea> </br>
		<label class = "foto_articolo_pubbl"> Carica immagine anteprima </label> <input type="file" accept = "image/png,image/gif,image/jpeg" name = "anteprima" class ="upload_foto_articolo"> </input> </br></br> 
		<label class = "foto_articolo_pubbl"> Carica immagine sinistra </label> <input type="file" accept = "image/png,image/gif,image/jpeg" name = "left" class ="upload_foto_articolo"> </input> </br></br>
		 <label class = "foto_articolo_pubbl"> Carica immagine destra </label> <input type="file" accept = "image/png,image/gif,image/jpeg" name = "right" class ="upload_foto_articolo"> </input> </br></br>
		<input id='pubblica_annu' type = 'submit' value = 'Pubblica'> </input>
	</form>


</div>