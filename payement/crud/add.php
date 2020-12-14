<?php 


require("connect.php");

if ($_POST) {

$id=$_POST['id'];
$titulaire=$_POST['titulaire'];
$numero=$_POST['numero'];
$cvv=$_POST['cvv'];
$type=$_POST['tp'];
$Mois=$_POST['Mois'];
$annee=$_POST['annee'];



$sql= "INSERT INTO `payement` VALUES (:id,:titulaire,:numero,:cvv,:tp,:Mois,:annee);";
$query = $db->prepare($sql);

$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':titulaire', $titulaire, PDO::PARAM_STR);
$query->bindValue(':numero', $numero, PDO::PARAM_INT);
$query->bindValue(':cvv', $cvv, PDO::PARAM_INT);
$query->bindValue(':tp', $type, PDO::PARAM_STR);
$query->bindValue(':Mois', $Mois, PDO::PARAM_INT);
$query->bindValue(':annee', $annee, PDO::PARAM_INT);



$query->execute();



$_SESSION['message']="vol ajouté"; 
require_once('close.php');

header('LOCATION: index.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter des Vols</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>
<center><h1>ajouter des VOLS </h1></center>
    <form  method="POST" >
    <div class="form-group">

    <label for="id"> ID   </label>

    <input type="number" name="id" class="form-control" >
 </div>
 <div class="form-group">

    <label for="titulaire"> Titulaire de la carte  </label>

    <input type="text" name="titulaire" class="form-control" >
</div>
    <label for="numero">numero de carte </label>

    <input type="number" name="numero" class="form-control">

<div class="form-group">

    <label for="cvv"> type </label>

    <input type="number" name="cvv"class="form-control" >
</div>
<div class="form-group">

    <label for="tp"> type de la carte  </label>

    <input type="text" name="tp" class="form-control" >
</div>
<div class="form-group">

    <label for="Mois"> Mois d expiration </label>

    <input type="number" name="Mois" class="form-control">
</div>
<div class="form-group">

    <label for="annee"> annee d expiration </label>
    <input type="number" name="annee" class="form-control">
</div>


<button class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>
















