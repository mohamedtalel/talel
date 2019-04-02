<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['id'])){
  $produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['id']);
  foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $prix=$row['prix'];
    $quantite=$row['quantite'];
    $image=$row['image'];
    $description=$row['description'];
?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>

<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite?>"></td>
</tr>
<tr>
<td>image</td>
<td><input type="file" name="image" value="<?PHP echo $image?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
  }
}
if (isset($_POST['modifier'])){
  $produit=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['quantie'],$_POST['image'],$_POST['description']);
  $produitC->modifierProduit($produit,$_POST['id_ini']);
  echo $_POST['id_ini'];
  header('Location: afficherProduit.php');
}
?>
</body>
</HTMl>