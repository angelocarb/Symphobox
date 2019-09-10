<?php
include "filtro.php";


?>

<?php


function controlla($email)
{
	$email = trim($email); /*restituisce la stringa privo degli spazi iniziali e finali , se non passo il secondo parametro
							rimuove i caratteri di default tipo " " , \t ecc ...*/
							
	if(!$email) {		/*non è un'email se la stringa è vuota*/
		return false;
	}

		/* controllo che ci sia una sola @ nella stringa , la "explode" separa la stringa rispetto a '@', -1 poichè 
		nel conto devo toglierci l'unica '@' che deve esserci*/
	$numero_occorrenze = count(explode( '@', $email )) - 1;
	if($numero_occorrenze != 1) {
		return false;
	}

	// controllo la presenza di ulteriori caratteri "pericolosi":
	if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
		return false;
	}

	// la stringa rispetta il formato classico di una mail?
	if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
		return false;
	}

	return true;
}


include "config_locale.php";

/* Prelevo l'email dal form */
$email = isset($_POST['email']) ? $_POST['email'] : false;
filtra($email);
   
/* Prelevo la password dal form */
$password = isset($_POST['password']) ? $_POST['password'] : false;
filtra($password);
   
   
   /* prelevo l'utente dal form */
   $utente = isset($_POST['utente']) ? $_POST['utente'] : false;
   filtra($utente);
   
   
   /* Prelevo il nome dal form */
$nome = isset($_POST['nome']) ? $_POST['nome'] : false;
filtra($nome);
   
   
   /* Prelevo il cognome dal form */
$cognome = isset($_POST['cognome']) ? $_POST['cognome'] : false;
filtra($cognome);
  
   /* Prelevo il giorno di nascita dal form */
$giorno_nascita = isset($_POST['giorno_nascita']) ? $_POST['giorno_nascita'] : false;

   
   
   /* Prelevo il mese di nascita dal form */
$mese_nascita = isset($_POST['mese_nascita']) ? $_POST['mese_nascita'] : false;
   
   
   /* prelevo l'anno di nascita dal form */
   $anno_nascita = isset($_POST['anno_nascita']) ? $_POST['anno_nascita'] : false;
   
    $data_nascita = $giorno_nascita."/".$mese_nascita."/".$anno_nascita;
   
   /* Prelevo la provincia dal form */
   $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
  
   
   /* prelevo il comune di appartenenza dal form */
    $comune = isset($_POST['comune']) ? $_POST['comune'] : false;
	filtra($comune);
   
   
   /* prelevo il sesso dal form */
    $sesso = isset($_POST['sesso']) ? $_POST['sesso'] : false;
	
	/* controllo se si lasciano campi vuoti*/
if(!$utente || !$nome || !$cognome || !$email || !$password || !$data_nascita || !$provincia || !$comune || !$sesso){
		
		header("location: ../index.php?p=registrazione&m=FORM INCOMPLETO&e=".$email."&pwd=".$password."&u=".$utente."&g_n=".$giorno_nascita."&m_n=".$mese_nascita."&a_n=".$anno_nascita."&pro=".$provincia."&com=".$comune."&sex=".$sesso."&n=".$nome."&c=".$cognome.""); 
		die();
}


if(!controlla($email)){ 
		header("location: ../index.php?p=registrazione&m=EMAIL NON VALIDA&e=".$email."&pwd=".$password."&u=".$utente."&g_n=".$giorno_nascita."&m_n=".$mese_nascita."&a_n=".$anno_nascita."&pro=".$provincia."&com=".$comune."&sex=".$sesso."&n=".$nome."&c=".$cognome.""); 
		die();
	}

	
	if(strpos($password,';') || strpos($password,',') || strpos($password,' ') || strpos($password , '?') || strpos($password , '@') ){
		header("location: ../index.php?p=registrazione&m=PASSWORD NON VALIDA&e=".$email."&pwd=".$password."&u=".$utente."&g_n=".$giorno_nascita."&m_n=".$mese_nascita."&a_n=".$anno_nascita."&pro=".$provincia."&com=".$comune."&sex=".$sesso."&n=".$nome."&c=".$cognome.""); 
		die();
	}

	else{
		$password = md5($password);
   
   /* controllo se esiste gia un campo con lo stesso nome utente e in tal caso non inserisco*/
  $controllo = "SELECT Utente FROM users WHERE Utente = '".$utente."'"; 
$result = mysqli_query($db_server , $controllo); 
$numero = mysqli_fetch_row($result);

if ($numero > 0) { 
  header("location: ../index.php?p=registrazione&m=NOME UTENTE NON DISPONIBILE&e=".$email."&pwd=".$password."&u=".$utente."&g_n=".$giorno_nascita."&m_n=".$mese_nascita."&a_n=".$anno_nascita."&pro=".$provincia."&com=".$comune."&sex=".$sesso."&n=".$nome."&c=".$cognome.""); 
		die();
} else { 
	
	$percorso_uomo = "immagini/foto_profilo_uomo.png";
	$percorso_donna = "immagini/foto_profilo_donna.png";
	if($_POST['sesso'] == 'Maschio'){
		$query = "INSERT INTO users(Utente , Nome , Cognome , Email , Pwd , DataNascita , Provincia , 
		Comune , Sesso , Admin , Ban, ImmagineProfilo) VALUES ('$utente' , '$nome' , '$cognome', '$email' , '$password' ,
		'$data_nascita' , '$provincia' , '$comune' , '$sesso' ,0 , 0 , '$percorso_uomo')";
		if(mysqli_query($db_server , $query)){
		header('location: ../index.php?p=annunci&page=2&m=REGISTRAZIONE EFFETTUATA CON SUCCESSO');  /* reindirizzamento se tutto va a buon fine */
		die();
		}
	}
	else{
		$query = "INSERT INTO users(Utente , Nome , Cognome , Email , Pwd , DataNascita , Provincia , 
		Comune , Sesso , Admin , Ban, ImmagineProfilo) VALUES ('$utente' , '$nome' , '$cognome', '$email' , '$password' ,
		'$data_nascita' , '$provincia' , '$comune' , '$sesso' ,0 , 0,'$percorso_donna')";
		if(mysqli_query($db_server , $query)){
		header('location: ../index.php?p=annunci&page=2&m=REGISTRAZIONE EFFETTUATA CON SUCCESSO');  /* reindirizzamento se tutto va a buon fine */
		die();
		}
	}
     
	

  
	
}
}
?>