<?PHP
include "../core/categorieC.php";
$categorieC=new CategorieC();
if (isset($_POST["id_categorie"])){
	$categorieC->supprimerCategorie($_POST["id_categorie"]);
	header('Location: listecat.php');
}

?>