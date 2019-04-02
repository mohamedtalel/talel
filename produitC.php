<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){
	    echo "id : ".$produit->getid()."<br>";
		echo "nom : ".$produit->getnom()."<br>";
		echo "Prix : ".$produit->getprix()."<br>";
		echo "Quantité: ".$produit->getquantite()."<br>";
		echo "image: ".$produit->getimage()."<br>";	
		echo "description : ".$produit->getdescription()."<br>";
	}
	function ajouterProduit($produit){
		$sql="insert into produit (id,nom,prix,quantite,image,description) values (:id,:nom, :prix, :quantite,:image , :description )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$id=$produit->getid();
        $nom=$produit->getnom();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite(); 
        $image=$produit->getimage();  
        $description=$produit->getdescription();

        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);	
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':image',$image);
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
    function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierProduit($produit,$id){
		$sql="UPDATE produit SET id=:id, nom=:nom,  prix=:prix, quantite=:quantite,image=:image, description=:description WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        $id=$produit->getid();
        $nom=$produit->getnom();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $image=$produit->getimage();     
        $description=$produit->getdescription();

		$datas = array(':id'=>$id,   ':nom'=>$nom,':prix'=>$prix,  ':quantite'=>$quantite,'image'=>$image, 'description'=>$description);

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);	
		$req->bindValue(':image',$image);	
		$req->bindValue(':description',$description);


            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
	function recupererProduit($id){
		$sql="SELECT * from produit where id=$id";
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