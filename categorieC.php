<?PHP
include "../config.php";
class CategorieC {
function afficherCategorie ($categorie){
		echo "id_categorie: ".$categorie->getId()."<br>";
		echo "nom_categorie: ".$categorie->getNom()."<br>";
		
	}
	
	function ajouterCategorie($categorie){
		$sql="insert into categorie (id_categorie,nom_categorie) values (:id_categorie, :nom_categorie)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_categorie=$categorie->getId();
        $nom_categorie=$categorie->getNom();
      
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($id_categorie){
		$sql="DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($categorie,$id_categorie){
		$sql="UPDATE categorie SET id_categorie=:id_categoriee, nom_categorie=:nom_categorie WHERE id_categorie=:id_categorie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_categoriee=$categorie->getId();
        $nom_categorie=$categorie->getNom();
		$datas = array(':id_categoriee'=>$id_categoriee, ':id_categorie'=>$id_categorie, ':nom_categorie'=>$nom_categorie);
		$req->bindValue(':id_categoriee',$id_categoriee);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($id_categorie){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>