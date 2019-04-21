console.log("aaaaaa00");	

function verif ()
{
	var nom=document.getElementById("nom").value;
	if (nom=="")
	{
		alert ("nom ne doit pas etre vide ");
		return;
	}
	

	var couleur=document.getElementById("couleur").value;

	if (couleur=="")
	{
		alert("couleur ne doit pas etre vide");
		return;
	}
	

	var prix=document.getElementById("prix").value;

	if (prix<0)
	{
		alert("prix ne doit pas etre negatif");
		return;
	}
	

	if (prix=="")
	{
		alert("prix ne doit pas etre vide");
		return;
	}
	
	var stock=document.getElementById("stock").value;
	if (stock<0)
	{
		alert("stock ne doit pas etre negatif");
		return;
	}


	if (stock=="")
	{
		alert("stock ne doit pas etre vide");
		return;
	}

		


}


function verifierCaracteres(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('nom');
      
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789 + ';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

function verifierCaracteres1(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('couleur');
      
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}
function verifierCaracteres3(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('stock');
      
  var caracteres = '0123456789';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

function verifierCaracteres2(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('description');
      
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ 123456789éè';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

