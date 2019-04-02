<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['quantite']) and  isset($_POST['image']) and  isset($_POST['description']) ){

$produit1=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['quantite'],$_POST['image'],$_POST['description']);

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header('Location: afficherProduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>