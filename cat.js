console.log("aaaaaa00");	

function verif ()
{


		var id_categorie=document.getElementById("id_categorie").value;
		var nom_categorie=document.getElementById("nom_categorie").value;

		if (id_categorie=="")
	{
		alert("id ne doit pas etre vide");
		return;
	}

	if (nom_categorie=="")
	{
		alert("nom ne doit pas etre vide");
		return;
	}

	if (id_categorie<0)
	{
		alert("id ne doit pas etre negatif");
		return;
	}


}




function verifierId(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('id_categorie');
      
  var caracteres = '0123456789';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

function verifierNom(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('nom');
      
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}