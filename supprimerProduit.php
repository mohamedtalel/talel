<?PHP
include "../core/ProduitC.php";
$produitC=new ProduitC();
if (isset($_POST["reference"])){
	$produitC->supprimerProduit($_POST["reference"]);
	header('Location: listeprod.php');
}

?>