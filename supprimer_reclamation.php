<?PHP
include '../core/reclamationC.php';
$reclamationC=new reclamationC();
if (isset($_POST["IdReclamation"])){
    $reclamationC->supprimerReclamation($_POST["IdReclamation"]);
    header('Location: afficher_reclamation.php');
}

?>