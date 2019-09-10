<!DOCTYPE html>
<html  lang="it">
<head>
	<title>Symphobox</title>
	<meta charset= "UTF-8" >
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="immagini/bemolle.png">
	<script type="text/javascript" src = "javascript/index.js">
</script>
</head>
	 <body <?php if(isset($_SESSION["Loggato"])) echo"onload = 'update_count()'";?>>






<?php
session_start();
if(isset($_GET['ris'])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
 }
?>

<?php
if(isset($_GET["docu"])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
}
?>


<?php
if(isset($_GET["trovato"])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
}
?>

<?php
 if(isset($_GET['n'])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
 }
?>
	 
<?php
 if(isset($_GET['m'])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
 }
?>


<?php 
 if(isset($_GET['IDannuncio'])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
 }
?>

<?php 
 if(isset($_GET['a'])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
 }
?>

<?php
if(isset($_SESSION["Loggato"])){
	echo"<script type='text/javascript' src='javascript/update_count.js'> </script>";
}
?>

<?php 
 if(isset($_GET['c'])){
	echo'<script> setTimeout(function(){fade("schermo_opaco",0.5)},300); </script>';
 }
?>






	
	
<div id="wrapper">

<?php
	if(isset($_SESSION["Loggato"]) &&($_SESSION['admin'] == 1)){
		
		echo"<div id = 'contenitore_menu_prova'>
		<div id='logout_form_admin'>
						<img id = 'ingranaggi' src = 'immagini/ingranaggi.png' onclick = 'admin()' alt='ingranaggi'> </img>
						<img id = 'icona_profilo' src = 'immagini/icona_profilo.png' onclick = 'profilo()' alt='icona_profilo'> </img>
						<div id = 'notifica'> </div>
						<img id = 'notifica_nuova_performance' class = 'notify' src = 'immagini/campanella.png' onclick = 'mostra_notifiche()' alt='notifica'> </img>";
						echo"<div id = 'div_notifica'>";
							/* prelevo tutte le notifiche relative all'utente loggato per mostrarle */
						include "php/config_locale.php";
						$richiedente = $_SESSION["Utente"];
						$query_preleva_notifiche = "SELECT* FROM risposte WHERE Richiedente = '$richiedente'";
						$res = mysqli_query($db_server , $query_preleva_notifiche);
						while($row = mysqli_fetch_array($res)){
							$query_estrai_img_profilo_interlocutore = "SELECT* FROM users WHERE Utente = '$row[Interlocutore]'";
							$result = mysqli_query($db_server ,$query_estrai_img_profilo_interlocutore);
							$fetch = mysqli_fetch_array($result);
									echo"<div id = 'linea_notifica' onclick = 'redirect_rispondi_a_notifica($row[IDrisposta])'>
										<img id = 'foto_utente_notifica' src = $fetch[ImmagineProfilo] alt = 'foto_utente'> </img>
										<p id = 'utente_in_risposta'> $row[Interlocutore] </p> <p id = 'ha_risposto'> ha risposto al tuo annuncio </p>
									</div>";
								
						}
							echo " </div> <img onclick = 'logout()' id = 'tasto_logout' src = 'immagini/tasto_logout.png' alt='logout'> </img>
						
				
		</div>
					<img id = 'logo_menu_prova' onclick = 'redirect()' src = 'immagini/logo_bianco.png' alt='logo'> </img>
					<ul id='menu_prova'>
						
						<li><a href='index.php?p=articoli&page=2' >ARTICOLI</a></li>
						<li><a href='index.php?p=annunci&page=2'>ANNUNCI</a></li>
						
					</ul>
			
				
			</div>
			<a href = 'index.php?p=homepage&docu=set' id = 'manuale_on_login'> manuale </a>";
	
	}
	else if(isset($_SESSION["Loggato"]) &&($_SESSION['admin'] == 0)) {
		
		
		echo"<div id = 'contenitore_menu_prova'>
		<div id='logout_form' method = 'POST'>
						<img id = 'icona_profilo_not_admin' src = 'immagini/icona_profilo.png' onclick = 'profilo()' alt='icona_profilo'> </img>
						<div id = 'notifica'> </div>
						<img id = 'notifica_nuova_performance_not_admin' class = 'notify' src = 'immagini/campanella.png' onclick = 'mostra_notifiche()' alt='notifica'> </img>";
						echo"<div id = 'div_notifica'>";
						/* prelevo tutte le notifiche relative all'utente loggato per mostrarle */
						include "php/config_locale.php";
						$richiedente = $_SESSION["Utente"];
						$query_preleva_notifiche = "SELECT* FROM risposte WHERE Richiedente = '$richiedente'";
						$res = mysqli_query($db_server , $query_preleva_notifiche);
						while($row = mysqli_fetch_array($res)){
									echo"<div id = 'linea_notifica' onclick = 'redirect_rispondi_a_notifica($row[IDrisposta])'>
										<img id = 'foto_utente_notifica' src = '../immagini/immagini_profilo/matteo.jpg' alt = 'foto'> </img>
										<p id = 'utente_in_risposta'> $row[Interlocutore] </p> <p id = 'ha_risposto'> ha risposto al tuo annuncio </p>
									</div>";
								
						}
						echo"</div> <img onclick = 'logout()' id = 'tasto_logout_not_admin' src = 'immagini/tasto_logout.png' alt='logout'> </img>
						
				
			</div>
					<img id = 'logo_menu_prova' onclick = 'redirect()' src = 'immagini/logo_bianco.png' alt='logo'> </img>
					<ul id='menu_prova'>
						<li><a href='index.php?p=articoli&page=2' >ARTICOLI</a></li>
						<li><a href='index.php?p=annunci&page=2'>ANNUNCI</a></li>
						
						
					</ul>
					
			
			
			</div>
			<a href = 'index.php?p=homepage&docu=set' id = 'manuale_on_login'> manuale </a>";
	}
	else{
		echo"<div id = 'contenitore_menu_prova'>
			<img id = 'logo_menu_prova' onclick = 'redirect()' src = 'immagini/logo_bianco.png' alt='logo'> </img>
				<ul id='menu_prova_not_logged'>
					
					<li><a href='index.php?p=articoli&page=2' >ARTICOLI</a></li>
						<li><a href='index.php?p=annunci&page=2'>ANNUNCI</a></li>
				</ul>
			
			
			</div>
			<a href = 'index.php?p=homepage&docu=set' id = 'manuale'> manuale </a>
			<div id = 'log_reg'><a id = 'ancora_reg' href = 'index.php?p=registrazione'> Registrati </a> 
			<img id = 'pulsante_login' onclick = 'redirect_login_form()' src = 'immagini/pulsante_login.png' alt ='login'> </img> </div>";
		
	}
?>


<?php 

/* calcolo numero utenti online */
include "php/config_locale.php";
$query = "SELECT* FROM users WHERE Loggato = 1";
if(mysqli_query($db_server , $query)){
	$result = mysqli_query($db_server , $query);
	$numero = mysqli_num_rows($result);
	$numero = $numero - 1;
}

 
if(isset($_SESSION['Loggato'])){
	 echo"<script type='text/javascript' src='../javascript/chat.js'> </script>
		<div id = 'contenitore_chat'>
			<div id = 'testa_chat'  onclick = 'apri()'> <p id = 'testo'>  $numero online </p>  <div id = 'pallino_online'> </div>   </div>
			<div id='CHAT'>";
				/* prelevo i messaggi nel DB e li stampo nella CHAT */
				$query_prel = "SELECT* FROM chat";
				$target = mysqli_query($db_server ,$query_prel);
				echo"<div id = 'container_mex'>";
				while($row = mysqli_fetch_array($target)){
					echo "<div class = 'linea_chat'> <p class = 'mittente'> $row[Mittente]: </p> <p class = 'content_mex'> $row[testo] </p> </div> </br>";
					
				}
				echo"</div>";
		echo"</div>
			 
			<div class = 'content_inpu_mex'>
			<input id = 'messaggio_chat' class='messaggio_chat' type='text' name='messaggio' autocomplete = 'off'> </input>
			<input  type='button' value='INVIA' onclick = 'Update_chat()' id = 'input_chat'> </input>
		</div>
		</div>";
		
		
			  
			
}
?>


 

<div id="content"> 
<?php
	if(isset($_GET['p'])){
		$pagina = $_GET['p'];
		include "php/".$pagina.".php";
	}
	else{
		/*$pagina = "homepage";
		include "php/".$pagina.".php";*/
		header('location: ../index.php?p=annunci&page=2');
		die();
	}
?>

</div> 
 



</div>


 
 
</body>

</html>