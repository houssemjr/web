
<?php
require("connect.php");

if ($_POST) {

$id=$_POST['id'];
$titulaire=$_POST['titulaire'];
$tp=$_POST['tp'];
$numero=$_POST['numero'];
$mois=$_POST['Mois'];
$annee=$_POST['annee'];
$cvv=$_POST['cvv'];



$sql= "INSERT INTO `payement` VALUES (:id,:titulaire,:tp,:numero,:Mois,:annee,:cvv);";
$query = $db->prepare($sql);

$query->bindValue(':idVol', $id, PDO::PARAM_INT);
$query->bindValue(':titulaire', $titulaire, PDO::PARAM_STR);
$query->bindValue(':lieu_a', $type, PDO::PARAM_STR);
$query->bindValue(':numero', $numero, PDO::PARAM_INT);
$query->bindValue(':date_d', $mois, PDO::PARAM_STR);
$query->bindValue(':date_r', $annee, PDO::PARAM_STR);
$query->bindValue(':heure_d', $cvv, PDO::PARAM_INT);


$query->execute();
$_SESSION['message']="payement ajouté"; 
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
<center><h1>ajouter moyen  de payement </h1></center>
    <form  method="POST" >
    <div class="form-group">

    <label for="id"> ID  </label>

    <input type="number" name="id" class="form-control" >
 </div>
 <div class="form-group">

    <label for="titulaire"> titulaire  </label>

    <input type="text" name="titulaire" class="form-control" >
</div>
<div class="form-group">

    <label for="numero">numero </label>

    <input type="number" name="numero" class="form-control">
</div>

<label for="tp">type </label>

<input type="tp" name="tp" class="form-control">
</div>
<div class="form-group">

    <label for="mois"> mois </label>

    <input type="text" name="Mois"class="form-control" >
</div>
<div class="form-group">

    <label for="annee"> annee </label>

    <input type="text" name="annee" class="form-control">
</div>
<div class="form-group">

    <label for="cvv"> cvv </label>
    <input type="number" name="cvv" class="form-control">
</div>

    
<button class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>


