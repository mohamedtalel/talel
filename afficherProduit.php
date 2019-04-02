<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>
<td>prix</td>
<td>quantite</td>
<td>image</td>
<td>description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['quantite']; ?></td>
  <td><?PHP echo $row['image'] ?>"</td>
  <td><?PHP echo $row['description']; ?></td>
  <td><form method="POST" action="supprimerProduit.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <td><a href="modifierProduit.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>


