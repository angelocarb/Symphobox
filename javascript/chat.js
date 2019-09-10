/* chiamata al click dell'evento */
function Update_chat(){
  Request();
}

/* inserisce l'ultimo messaggio nel DB*/
function Request(){
	var messaggio = document.getElementById("messaggio_chat").value;
	svuota();
	var xhr = new XMLHttpRequest();
	 method = "GET";
	xhr.open(method,"index.php?p=ajax&m="+messaggio,true);
	xhr.send();
	setTimeout(function (){ stampa_live();} , 250);
	
}



/* stampa i messaggi con l'ultimo aggiornato, il nodo creato che mantiene l'ultimo */
function stampa_live(){            
	var xhr = new XMLHttpRequest();
	 method = "GET";
	xhr.open(method,"../php/preleva_mex_live.php",true);
	xhr.onreadystatechange = function (){
					if(xhr.readyState === 4 && xhr.status === 200){
						var mex = JSON.parse(xhr.responseText);
						var node = document.createElement("div");
						var textnode = document.createTextNode(mex[0]);
						node.appendChild(textnode);
						node.id = "last_mex";
						document.getElementById("container_mex").appendChild(node);
					}
	
				};
xhr.send();
}

function svuota_textbox(){
	var contenuto = document.getElementById("messaggio_chat");
	contenuto.value = "";
}

function svuota(){
	setTimeout(function(){svuota_textbox();} , 100);
}


/* ---------------------------------------------------------------- */


function aggiorna_chat_live(){
	setInterval(function(){ stampa_live();}, 300);
}

	

