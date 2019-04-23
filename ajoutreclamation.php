<?PHP
include '../core/reclamationC.php';
include '../entities/reclamation.php';

$reclamationC=new reclamationC();
if (isset($_POST["IdClient"]) and isset($_POST["DateAjout"]) and isset($_POST["type"]) and isset($_POST["Sujet"]) and isset($_POST["Etat"])){
	$reclamation = new reclamation($_POST["IdClient"],$_POST["DateAjout"],$_POST["type"],$_POST["Sujet"],$_POST["Etat"]);
    $reclamationC->ajouterReclamation($reclamation);
    header('Location: afficher_reclamation.php');
}

?>