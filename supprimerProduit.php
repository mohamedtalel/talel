<?PHP
include "../core/ProduitC.php";
$produitC=new ProduitC();
if (isset($_POST["id"])){
	$produitC->supprimerProduit($_POST["id"]);
	header('Location: afficherProduit.php');
}

?>