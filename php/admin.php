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

<div id = "content_admin">

 <div id="content_menu_admin">
	<ul>
		<li class = "admin_li"> <a href = "index.php?p=admin&s=gestione" class = "admin_a"> GESTIONE</a> </li>
		<li class = "admin_li"> <a href = "index.php?p=admin&s=ban" class = "admin_a"> BAN</a> </li>
		<li class = "admin_li"> <a href = "index.php?p=admin&s=pubblica_articolo" class = "admin_a"> PUBBLICA </a> </li>
	</ul>
 </div>
	<?php
	include $_GET['s'].".php";
	?>

	
	
	


</div>