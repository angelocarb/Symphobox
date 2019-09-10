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

<div id = "content_articoli">
<!-- <h5> ARTICOLI </h5> -->

<?php
	include "config_locale.php";
	$number_page = $_GET["page"];
	$number_page = ($number_page *5);
	$query_preleva_articolo = "SELECT* FROM articoli LIMIT $number_page";
	if(mysqli_query($db_server , $query_preleva_articolo)){
		$result = mysqli_query($db_server , $query_preleva_articolo);
		$num_tot = mysqli_num_rows($result);
		while($row = mysqli_fetch_array($result)){
			$anteprima_content = substr($row[3],0,450);
			echo "<div class = 'articolo'> 
						<img src = '$row[5]' class = 'foto_articolo' alt='foto'>  </img>
						<div class = 'titolo_articolo'> $row[2] </div>
						<div class = 'info_articolo'> <div class = 'data_caricamento'> <img class = 'icona_orologio' src = '../immagini/icona_orologio.png' alt='icona_orologio'> </img> &nbsp $row[4] </div> <div class = 'caricatore'> <img class = 'icona_caricatore' src = '../immagini/icona_caricatore.png' alt='icona_caricatore'> </img> &nbsp $row[1] </div> </div>
						<div class = 'testo_anteprima'> $anteprima_content...  </div>
						<a href = 'index.php?p=lettura_articolo&id=$row[IDarticolo]&page_comment=2' class = 'on_click'> <img class = 'freccia_destra' src = '../immagini/freccia-destra.png' alt='freccia'> </img> Continua a leggere ... </a>
					</div>";
			
		}
	}
?>


<div id = "button_sfoglia<?php echo $_GET['page'];?>" class = "button_sfoglia" onclick = "sfoglia_articoli(this , <?php echo $num_tot ?>)"> SFOGLIA </div>

</div>