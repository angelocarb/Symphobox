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

<div id="reg_content">


	<form id="reg_form" method = "POST" action = "php/registrazione_process.php">
	<img id = "img_chit_reg" src = "../immagini/chitarrista_assolo_colore_grigio.png" alt=""> </img>
		<h1> Indirizzo email </h1>
		<input class= "input_reg_email" type="text" name="email"<?php
			if(isset($_GET['e'])){
			$email = $_GET['e'];
			echo "value='$email'";
			}
			?>> 
		</input>
		
		</br> </br> </br>
		
		<h1> Dati di accesso </h1>
			<input class= "input_reg_email" type="password" name="password" <?php
			if(isset($_GET['pwd'])){
			$password = $_GET['pwd'];
			echo "value='$password'";
			}
			?>> 
		</input>
		
		</br> </br> </br>
		
		<h1> Nome Utente </h1>
			<input class= "input_reg_email" type="text" name="utente" <?php
			if(isset($_GET['u'])){
			$utente = $_GET['u'];
			echo "value='$utente'";
			}
			?>> 
		</input>
		
		</br> </br> </br>
		
		
		<h1> Nome </h1>
			<input class= "input_reg_email" type="text" name="nome" <?php
			if(isset($_GET['n'])){
			$nome = $_GET['n'];
			echo "value='$nome'";
			}
			?>> 
		</input>
		
		</br> </br> </br>
		
		<h1> Cognome </h1>
			<input class= "input_reg_email" type="text" name="cognome" <?php
			if(isset($_GET['c'])){
			$cognome = $_GET['c'];
			echo "value='$cognome'";
			}
			?>> 
		</input>
		
		</br> </br> </br>
	
		<h1> Comune di appartenenza </h1>
			<input class= "input_reg_email" type="text" name="comune" <?php
			if(isset($_GET['com'])){
			$comune = $_GET['com'];
			echo "value='$comune'";
			}
			?>> 
		</input>
		
		</br> </br> </br>
		
		<h1> Sesso </h1>
			<select id = "select_sesso" name = "sesso"
			<?php
			if(isset($_GET['sex'])){
			$sesso = $_GET['sex'];
			echo "value='$sesso'";
			}
			?>>
			<option value = "Maschio"> Maschio </option>
			<option value = "Femmina"> Femmina </option>
			
			</select>
		</br> </br> </br>
		
		<h1> Data di nascita </h1>
		<div>	
		<select class="data_nascita" name ="giorno_nascita" <?php
			if(isset($_GET['g_n'])){
			$giorno_nascita = $_GET['g_n'];
			echo "value='$giorno_nascita'";
			}
			?>>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
		<select class="data_nascita" name="mese_nascita"
		<?php
			if(isset($_GET['m_n'])){
			$mese_nascita = $_GET['m_n'];
			echo "value='$mese_nascita'";
			}
			?>>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
		<select class="data_nascita" name ="anno_nascita"
		<?php
			if(isset($_GET['a_n'])){
			$anno_nascita = $_GET['a_n'];
			echo "value='$anno_nascita'";
			}
			?>>
		
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
		</div>
		
		</br> </br> </br>
			
			<h1> Provincia </h1>
			<select id = "select_provincia" name = "provincia"
			<?php
			if(isset($_GET['pro'])){
			$provincia = $_GET['pro'];
			echo "value='$provincia'";
			}
			?>>
				<option value="Agrigento"> Agrigento </option>							
				<option value = "Alessandria"> Alessandria </option>	
				<option value = "Ancona"> Ancona	</option>
				<option value = "Aosta"> Aosta	   </option>
				<option value = "Arezzo"> Arezzo	</option>
				<option value = "Ascoli Piceno"> Ascoli Piceno	</option>
				<option value = "Asti"> Asti	</option>
				<option value = "Avellino">Avellino	</option>
				<option value = "Bari"> Bari	</option>
				<option value = "Barletta-Andria-Trani">Barletta-Andria-Trani	</option>
				<option value = "Belluno">Belluno	</option>
				<option value = "Benevento"> Benevento </option>	
				<option value = "Bergamo"> Bergamo	</option>
				<option value = "Biella" >Biella	</option>
				<option value = "Bologna">Bologna	</option>
				<option value = "Bolzano" >Bolzano	</option>
				<option value = "Brescia">Brescia	</option>
				<option value = "Brindisi">Brindisi	</option>
				<option value = "Cagliari">Cagliari	
				<option value = "Caltanissetta" >Caltanissetta	</option>
				<option value ="Campobasso" >Campobasso	</option>
				<option value = "Carbonia-Iglesias"> Carbonia-Iglesias </option>	
				<option value = "Caserta"> Caserta	</option>
				<option value = "Catania"> Catania	</option>
				<option value = "Catanzaro"> Catanzaro	</option>
				<option value = "chieti" >Chieti	</option>
				<option value = "Como" >Como	</option>
				<option value = "Cosenza" >Cosenza	</option>
				<option value = "Cremona" >Cremona	</option>
				<option value = "Crotone" >Crotone	</option>
				<option value = "Cuneo" >Cuneo	</option>
				<option value = "Enna" >Enna	</option>
				<option value = "Fermo" >Fermo	</option>
				<option value = "Ferrara" >Ferrara	</option>
				<option value = "Firenze" >Firenze	</option>
				<option value = "Foggia">Foggia	</option>
				<option value = "Forlì-Cesena">Forlì-Cesena	</option>
				<option value = "Frosinone">Frosinone	</option>
				<option value = "Genova">Genova	</option>
				<option value = "Gorizia">Gorizia	</option>
				<option value = "Grosseto">Grosseto	</option>
				<option value = "Imperia">Imperia	</option>
				<option value = "Isernia">Isernia	</option>
				<option value = "La Spezia">La Spezia	</option>
				<option value = "L'aquiila">L'Aquila	</option>
				<option value = "Latina">Latina	</option>
				<option value = "Lecce">Lecce	</option>
				<option value = "Lecco">Lecco	</option>
				<option value = "Livorno">Livorno	</option>
				<option value = "Lodi">Lodi	</option>
				<option value = "Lucca">Lucca	</option>
				<option value = "Macerata">Macerata	</option>
				<option value = "Mantova">Mantova	</option>
				<option value = "Massa-Carrara">Massa-Carrara	</option>
				<option value = "Matera">Matera	</option>
				<option value = "Messina">Messina	</option>
				<option value = "Milano">Milano	</option>
				<option value = "Modena">Modena	</option>
				<option value = "Monza e della Brianza">Monza e della Brianza	</option>
				<option value = "Napoli">Napoli	</option>
				<option value = "Novara">Novara	</option>
				<option value = "Nuoro">Nuoro	</option>
				<option value = "Olbia-Tempio">Olbia-Tempio	</option>
				<option value = "Oristano">Oristano	</option>
				<option value = "Padova">Padova	</option>
				<option value = "Palermo">Palermo	</option>
				<option value = "Parma">Parma	</option>
				<option value = "Pavia">Pavia	</option>
				<option value = "Perugia">Perugia	</option>
				<option value = "Pesaro e Urbino">Pesaro e Urbino	</option>
				<option value = "Pescara">Pescara	</option>
				<option value = "Piacenza">Piacenza	</option>
				<option value = "Pisa">Pisa	</option>
				<option value = "Pistoia">Pistoia	</option>
				<option value = "Pordenone">Pordenone	</option>
				<option value = "Potenza">Potenza </option>
				<option value = "Prato">Prato	</option>
				<option value = "Ragusa">Ragusa	</option>
				<option value = "Ravenna">Ravenna </option>
				<option value = "Reggio Calabria">Reggio Calabria	</option>
				<option value = "Reggio Emilia">Reggio Emilia </option>
				<option value = "Rieti">Rieti </option>
				<option value = "Rimini">Rimini </option>
				<option value = "Roma">Roma </option>
				<option value = "Rovigo"> Rovigo </option>
				<option value = "Salerno">Salerno	</option>
				<option value = "Medio Campidano">Medio Campidano	</option>
				<option value = "Sassari">Sassari	</option>
				<option value = "Savona">Savona	</option>
				<option value = "Siena">Siena	</option>
				<option value = "Siracusa">Siracusa </option>
				<option value = "Sondrio">Sondrio	</option>
				<option value = "Taranto">Taranto </option>
				<option value = "Teramo">Teramo </option>
				<option value = "Terni">Terni </option>
				<option value = "Torino">Torino	</option>
				<option value = "Ogliastra">Ogliastra	</option>
				<option value = "Trapani">Trapani	</option>
				<option value = "Trento">Trento	</option>
				<option value = "Treviso">Treviso	</option>
				<option value = "trieste">Trieste	</option>
				<option value = "Udine">Udine	</option>
				<option value = "Varese">Varese		</option>
				<option value = "Venezia">Venezia		</option>
				<option value = "Verbano-Cusio-Ossola">Verbano-Cusio-Ossola	</option>
				<option value = "Vercelli">Vercelli	</option>
				<option value = "Verona">Verona	</option>
				<option value = "Vibo Valentia">Vibo Valentia	</option>
				<option value = "Vicenza">Vicenza	</option>
				<option value = "Viterbo">Viterbo </option>
			</select>
		</br> </br> </br>
		<input id="input_reg_submit" type="submit" value = "REGISTRATI"> </input> 
	
	</form>




</div>