<?PHP
class Categorie{
	private $id_categorie;
	private $nom_categorie;
	
	function __construct($id_categorie,$nom_categorie){
		$this->id_categorie=$id_categorie;
		$this->nom_categorie=$nom_categorie;
		
	}
	
	function getId(){
		return $this->id_categorie;
	}
	function getNom(){
		return $this->nom_categorie;
	}
	

	function setNom($nom_categorie){
		$this->nom_categorie=$nom_categorie;
	}
	
	
}

?>