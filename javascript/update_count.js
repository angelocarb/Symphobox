function Update(){
  return update_count();
}

window.setInterval("Update()", 5000);

function update_count(){    /*aggiorna il contatore delle notifiche*/
	var xhr = new XMLHttpRequest();
    method = "GET";
    url = "../php/conta_notifiche.php";    
	xhr.open(method, url, true);
	xhr.onreadystatechange = function (){
	    if(xhr.readyState === 4 && xhr.status === 200){
			var oggetto = JSON.parse(xhr.responseText);
			if(document.getElementById("contenitore")){
				var eliminato = document.getElementById("contenitore");
				eliminato.parentNode.removeChild(eliminato);
				var padre = document.getElementById("notifica");
				var contenitore = document.createElement("div");
				contenitore.id="contenitore";
				var numero = document.createTextNode(oggetto[0]);
			    padre.appendChild(contenitore);
				contenitore.appendChild(numero);
			}else{
				var padre = document.getElementById("notifica");
				var contenitore = document.createElement("div");
				contenitore.id="contenitore";
				var numero = document.createTextNode(oggetto[0]);
			
				padre.appendChild(contenitore);
				contenitore.appendChild(numero);
			}
		}
	};
	xhr.send();
}





