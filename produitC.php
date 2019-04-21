<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){

		echo "reference : ".$produit->getnom()."<br>";
		echo "categorie : ".$produit->getCategorie()."<br>";
		echo "nom : ".$produit->getnom()."<br>";
		echo "Prix : ".$produit->getPrix()."<br>";
		echo "couleur: ".$produit->getCouleur()."<br>";
		echo "image: ".$produit->getImage()."<br>";	
		echo "stock : ".$produit->getStock()."<br>";
		echo "description : ".$produit->getDescription()."<br>";
	}
	function ajouterProduit($produit){
		$sql="insert into produit (categorie,nom,couleur,image,prix,stock,description) values(:categorie,:nom,:couleur,:image,:prix,:stock,:description )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $categorie=$produit->getCategorie();
        $nom=$produit->getnom();
        $prix=$produit->getprix();
        $couleur=$produit->getCouleur();
        $image=$produit->getImage();
        $stock=$produit->getStock();
        $description=$produit->getDescription();

        
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':nom',$nom);
        $req->bindValue(':couleur',$couleur);
        $req->bindValue(':image',$image);
        $req->bindValue(':prix',$prix);
		$req->bindValue(':stock',$stock);
		$req->bindValue(':description',$description);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function supprimerProduit($reference){
		$sql="DELETE FROM produit where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierProduit($produit,$reference){
    $db = config::getConnexion();

    $req = $db->query("update produit set  


    categorie='" .$produit->getCategorie() . "',
    nom='" .$produit->getNom() . "',
    prix='" .$produit->getprix() . "',
    couleur='" .$produit->getCouleur() . "',
    image='" .$produit->getImage() . "',
    stock='" .$produit->getStock() . "',
    description='" .$produit->getDescription() . "'
            WHERE reference='" . $reference . "' ") ;

	}
	function recupererProduit($reference){
		$sql="SELECT * from produit where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>