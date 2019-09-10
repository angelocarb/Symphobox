<?php
function filtra($string)
 {
  include "config_locale.php";
  if (get_magic_quotes_gpc())
   $string = stripslashes($string);
  if (!is_numeric($string))
   $string = mysqli_real_escape_string($db_server,$string);
	return $string;
 }
 
?>