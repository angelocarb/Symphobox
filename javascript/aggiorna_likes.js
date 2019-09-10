function aggiornaLikes(e){
	var id = e.getAttribute("id");
	if(e.getAttribute("src") == "../immagini/cuore_like_pieno.png"){
	var cuore = document.getElementById(id);
	cuore.setAttribute("src" , "../immagini/cuore_like.png");
	var xhr = new XMLHttpRequest();
    method = "GET";
    xhr.open(method, "index.php?p=togli_likes&ID="+id,true);
	xhr.send();
}else{
	var cuore = document.getElementById(id);
	cuore.setAttribute("src" , "../immagini/cuore_like_pieno.png");
	var xhr = new XMLHttpRequest();
    method = "GET";
    xhr.open(method, "index.php?p=aggiorna_likes&ID="+id,true);
	xhr.send();
}

}


