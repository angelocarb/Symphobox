<?php
include "config_locale.php";

$query_preleva_live = "SELECT* FROM chat ORDER BY DataInvio DESC LIMIT 1";
$result = mysqli_query($db_server , $query_preleva_live);
$row = mysqli_fetch_array($result);
$ultimo_mex = $row["Mittente"].": ".$row["testo"];

$ultimo = array("$ultimo_mex");
$data = json_encode($ultimo);
echo $data;



?>