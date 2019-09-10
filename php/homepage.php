<?php 
if(isset($_GET['docu'])){
	
	echo"<div id = 'schermo_opaco' class = 'modal'>
		<div class = 'modal_content_manuale'>
		<div id = 'logo_on_register_manuale'> </div>
		<h4> MANUALE </h4>
		<p id='contenuto_manuale'> 
		Symphobox è  un motore di ricerca dedicato a tutti i musicisti che vogliono farsi trovare o che cercano nuove collaborazioni. La piattaforma prevede un sistema di
		registrazione e di login. Le tipologie di utente previste nella progettazione sono due (not-admin ,  admin) , e godono di diversi privilegi in base che  l'utente
		sia amministratore o meno. Sulla piattaforma è prevista la navigazione nella sezione 'Annunci' che contiene tutti gli annunci pubblicati dagli utenti registrati,
		la pubblicazione di articoli (per i soli account admin) e la navigazione nella sezione 'Articoli' che rientrano nell'ambito della musica in generale. 
		A fare da cornice al tutto vi è un sistema di notifiche e una chat globale degli utenti.
		</p>
		<button id = 'entra' onclick = 'entra()'> ENTRA </button>
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

<?php 
if(isset($_GET['c'])){
	echo"<div id = 'schermo_opaco' class = 'modal'>
		<div class = 'modal_content'>
		<div id = 'logo_on_register'> </div>
			<form id = 'login_form' method = 'POST' action = 'php/login_process.php'>
				 <input id = 'input_login_utente' type = 'text' name = 'Nome_utente' autocomplete= 'off' value = 'Utente' onclick = scomparsa_value('input_login_utente')> </input> </br> </br>
				 <input id = 'input_login_password' type = 'password' name = 'login_password' value = 'Password' onclick = scomparsa_value('input_login_password')> </input> </br> </br>
				<input id = 'input_login_submit' name = 'login' type = 'submit' value = 'ACCEDI'> </input>
			</form>
		</div>
		</div>";
}
?>


























  
















