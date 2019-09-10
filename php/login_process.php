<?php
session_start();
include "config_locale.php";
include "filtro.php";
	

if(empty($_POST["Nome_utente"]) || empty($_POST["login_password"])){
	header("location: ../index.php?p=homepage&m=FORM INCOMPLETO");
	die();
}



$nome_utente = filtra($_POST["Nome_utente"]);
$password = filtra($_POST["login_password"]);
$pass_cript = md5($password);

$nome_utente = mysql_real_escape_string($_POST["Nome_utente"]);
$password = mysql_real_escape_string($_POST["login_password"]);

$query = "SELECT* FROM users WHERE Utente = '".$nome_utente."' AND Pwd = '".$pass_cript."'";
$result = mysqli_query($db_server , $query); 
$numero = mysqli_fetch_array($result);

if($numero["Ban"] == 1){
	header("location: ../index.php?p=annunci&page=2&m=SEI STATO BANNATO"); 
	die();
}

if($numero > 0){
	$_SESSION["Loggato"]=1;
	$query = "UPDATE users SET loggato = '1' WHERE Utente ='".$nome_utente."' AND Pwd = '".$pass_cript."'";
	if(mysqli_query($db_server , $query)){
		$query = "SELECT* FROM users WHERE Utente = '$nome_utente'";
		$result = mysqli_query($db_server , $query);
		$row = mysqli_fetch_array($result);
		$_SESSION['Utente'] = $nome_utente;
		$_SESSION['ImmagineProfilo'] = $row["ImmagineProfilo"];
		$_SESSION['Nome'] = $row["Nome"];
		$_SESSION['Cognome'] = $row["Cognome"];
		$_SESSION['Password'] = $row["Pwd"];
		$_SESSION['Data_reg'] = $row["Data_reg"];
		$query_admin = "SELECT* FROM users WHERE Utente = '".$nome_utente."' AND Admin = 1 ";
		$result_admin = mysqli_query($db_server , $query_admin);
		$numero_admin = mysqli_fetch_row($result_admin);
		if($numero_admin > 0){
			$_SESSION['admin'] = 1;
		}
		else{
			$_SESSION['admin'] = 0;
		}
		header('location: ../index.php?p=annunci&page=2&m=LOGIN EFFETTUATO');
		die();
	}
}else{
	header("location: ../index.php?p=homepage&m=NOME UTENTE O PASSWORD ERRATO"); 
	die();
	
}
	
	

?>