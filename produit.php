<?PHP
class Produit{
	private $id;
	private $nom;
	private $prix;
	private $quantite;
	private $image;
	private $description;
	

	function __construct($id,$nom,$prix,$quantite,$image,$description){
		$this->id=$id;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->image=$image;
		$this->description=$description;
	}
	
	function getid(){
		return $this->id;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprix(){
		return $this->prix;
	}
	function getquantite(){
		return $this->quantite;
	}

	function getimage(){
		return $this->image;
	}
	
	function getdescription(){
		return $this->description;
	}


	function setid($id){
		$this->idp=$idp;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprix($prix){
		$this->prix=$prix;
	}		
	
	function setquantite($quantite){
		$this->quantite=$quantite;
	}

	function setimage($image){
		$this->image=$image;
	}	
	
	function setDescription($description){
		$this->description=$description;
	}

	
}

?>