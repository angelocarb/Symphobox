function redirect(){
	window.location.href = '../index.php?p=annunci&page=2';  /* reindirizza all'home quando si clicca sul logo del sito */
}

function logout(){
	window.location.href = '../php/logout.php'; 
}

function admin(){
	window.location.href = 'index.php?p=admin&s=gestione';
}

function profilo(){
	window.location.href = 'index.php?p=profilo';
}

function redirect_articoli(){
	window.location.href = 'index.php?p=articoli';
}

function redirect_annunci(){
	window.location.href = 'index.php?p=annunci';
}

function redirect_performance(){
	window.location.href = 'index.php?p=performance';
}

function redirect_login_form(){
	window.location.href = 'index.php?p=homepage&c=set';
}

function redirect_rispondi_a_notifica(ID){
	var id = ID;
	window.location.href = 'index.php?p=annunci&page=2&n=notify&idnotify='+id;
}


function registrazione_effettuata(){
	var model = document.getElementById("schermo_opaco");
	
	function on_register(){
		model.style.display = "block";
	}
	on_register();
	window.onclick = function(event){
		if(event.target == model){
			model.style.display = "none";
		}
	}
}




function mostra_pulsante_comment(){
	var prova = document.getElementById("content_textarea").style.height = "100px";
	var bottom = document.getElementById("post").style.opacity = 1;
	document.getElementById("post").style.transition = "8s";
	document.getElementById("content_textarea").style.transition = "3s";
}



function fade(id,tm){
	
    var el = document.getElementById(id);
	el.style.opacity = 1;

	el.onclick = function(event){	
		if (event.target == el) {
			 el.style.display = 'none';
		}
	}
	
    el.style.transition = "opacity " + tm + "s";
    el.style.WebkitTransition = "opacity " + tm + "s";
}




function apri(){
	if(document.getElementById("testa_chat").style.backgroundColor!="rgb(0, 201, 87)"){
		document.getElementById("contenitore_chat").style.marginTop = "14%";
		document.getElementById("contenitore_chat").style.transition = "1s";
		document.getElementById("testa_chat").style.backgroundColor = "#00C957";
		document.getElementById("testa_chat").style.transition = "2s";
		document.getElementById("messaggio_chat").style.opacity=1;
		document.getElementById("messaggio_chat").style.transition="2s";
		document.getElementById("pallino_online").style.backgroundColor = "#00C957";
		document.getElementById("testo").style.color = "black";
		document.getElementById("testo").style.transition="2s";
	}else{
		
		document.getElementById("contenitore_chat").style.marginTop = "39.5%";
		document.getElementById("testa_chat").style.backgroundColor = "black";
		document.getElementById("messaggio_chat").style.opacity=0;
		document.getElementById("pallino_online").style.transition= "2s";
		document.getElementById("pallino_online").style.backgroundColor = "green";
		document.getElementById("testo").style.color = "white";
		document.getElementById("testo").style.transition="2s";
	}
	
	
	
}

function leggi_notifiche(){     /*legge le notifiche al click sull'icona messaggio e mette ad 1 il valore "Letto" nel DB */
	var xhr = new XMLHttpRequest();
    method = "GET";
    url = "../php/leggi_notifiche.php";   
	xhr.open(method, url, true);
	xhr.onreadystatechange = function (){
	    if(xhr.readyState === 4 && xhr.status === 200){
			if(document.getElementById("contenitore")){
				var eliminato = document.getElementById("contenitore");
				eliminato.parentNode.removeChild(eliminato);
				var padre = document.getElementById("notifica");
				
			}
			
		}
	};
	xhr.send();
	
}

function mostra_notifiche(){
	leggi_notifiche();
	var prova = document.getElementById("div_notifica");
	prova.style.display = "block";
	var icona=document.getElementsByClassName("notify")[0];
	icona.onclick=function(){chiudi();};
	
	
}

function chiudi(){
	var prova = document.getElementById("div_notifica");
	prova.style.display = "none";
	var icona=document.getElementsByClassName("notify")[0];
	icona.onclick=function(){mostra_notifiche();};
	
}

function sfoglia(e,totale){
	var stringa = e.getAttribute("id");
	var sub = stringa.substr(14,1);
	var pagina = parseInt(sub,10);
	pagina++;
	var quantiAnnunciMancanti=totale-(pagina*5); //restituisce il numero di annunci che devono ancora essere stampati
	if(quantiAnnunciMancanti<0){
		var annuncioDaPuntare=totale+quantiAnnunciMancanti;
	}else{
		var annuncioDaPuntare=totale-5;
	}
	window.location.href = "index.php?p=annunci&page="+pagina+"#"+annuncioDaPuntare;
}

function sfoglia_comments(e,totale,ID){
	var stringa = e.getAttribute("id");
	var sub = stringa.substr(19,1);
	var pagina = parseInt(sub,10);
	pagina++;
	window.location.href = "index.php?p=lettura_articolo&page_comment="+pagina+"&id="+ID;
}

function sfoglia_articoli(e , totale){
	var stringa = e.getAttribute("id");
	var sub = stringa.substr(14,1);
	var pagina = parseInt(sub,10);
	pagina++;
	var quantiArticoliMancanti=totale-(pagina*5); //restituisce il numero di annunci che devono ancora essere stampati
	if(quantiArticoliMancanti<0){
		var articoloDaPuntare=totale+quantiArticoliMancanti;
	}else{
		var articoloDaPuntare=totale-5;
	}
	window.location.href = "index.php?p=articoli&page="+pagina+"#"+articoloDaPuntare;
}

function carica_annuncio(){
	window.location.href = "index.php?p=profilo&ris=settata";
}

function entra(){
	window.location.href = "index.php?p=annunci&page=2";
}



















	
	





