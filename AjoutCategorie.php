<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['id_categorie']) and isset($_POST['nom_categorie']) ){
$categorie1=new categorie($_POST['id_categorie'],$_POST['nom_categorie']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: listecat.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>