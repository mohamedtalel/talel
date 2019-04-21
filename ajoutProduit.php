<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['categorie']) and  isset($_POST['nom']) and  isset($_POST['couleur']) and isset($_POST['image'])  and  isset($_POST['prix']) and  isset($_POST['stock'] )and  isset($_POST['description']) ){

$produit1=new produit($_POST['categorie'],$_POST['nom'],$_POST['couleur'],$_POST['image'],$_POST['prix'],$_POST['stock'],$_POST['description']);

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header('Location: listeprod.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>