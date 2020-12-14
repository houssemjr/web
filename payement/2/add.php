<?php
session_start();

if ($_POST){

    if (isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['titulaire']) && !empty($_POST['titulaire'])
    && isset($_POST['numero']) && !empty($_POST['numero'])
    && isset($_POST['Mois']) && !empty($_POST['Mois'])
    && isset($_POST['annee']) && !empty($_POST['annee'])
    && isset($_POST['cvv']) && !empty($_POST['cvv'])
    && isset($_POST['tp']) && !empty($_POST['tp'])){

require_once('connect.php');
$id=strip_tags($_POST['id']);
$titulaire=strip_tags($_POST['titulaire']);
$numero=strip_tags($_POST['numero']);
$Mois=strip_tags($_POST['Mois']);
$annee=strip_tags($_POST['id']);
$cvv=strip_tags($_POST['cvv']);
$tp=strip_tags($_POST['tp']);



$query = $db->prepare("INSERT INTO liste (id,titulaire, numero, cvv, tp, Mois, annee) VALUES (:id,:titulaire, :numero, :cvv, :tp,:Mois,:annee);");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':Mois', $Mois, PDO::PARAM_INT);
$query->bindValue(':annee', $annee, PDO::PARAM_INT);
$query->bindValue(':titulaire', $titulaire, PDO::PARAM_STR);
$query->bindValue(':numero', $numero, PDO::PARAM_INT);
$query->bindValue(':cvv', $cvv, PDO::PARAM_INT);
$query->bindValue(':tp', $tp, PDO::PARAM_STR);

$query->execute();

$_SESSION['message']="PAYEMENT ajouté"; 
require_once('close.php');

header('LOCATION: index.php');
}



}else {
        $_SESSION['erreur'] ="le formulaire est incomplet";
    }




?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<main class="container">
    <div class="row">
    <section class="col-12">
<?php
if (!empty($_SESSION['erreur'])){

echo '<div class="alert alert-danger" role="alert">'. $_SESSION['erreur']. '</div>';
$_SESSION['erreur'] = "";


}



?>


    <center><h1>ajouter des payements </h1> </center>
 
<form  method="post">
<div class="form-group">
<label for="id">identifiant de titulaire de la carte</label>
<input type="text" id="id" name="id" class="form-control">
</div>
<div class="form-group">
<label for="titulaire">titulaire de la carte</label>
<input type="text" id="titulaire" name="titulaire" class="form-control">
</div>
<div class="form-group">
<label for="numero">numero de la carte</label>
<input type="number" id="numero" name="numero" class="form-control">
</div>
<div class="form-group">
<label for="Mois">Mois d expiration</label>
<input type="text" id="Mois" name="Mois" class="form-control">
</div>
<label for="annee">année d expiration</label>
<input type="text" id="annee" name="annee" class="form-control">
</div>
<div class="form_group">
<label for="cvv">cvv</label>
<input type="number" id="cvv" name="cvv"  class="form-control">
</div>
<div class="form-group">
<label for="tp">type de la carte</label>
<input type="text" id="tp" name="tp"  class="form-control">
</div>
<button class="btn btn-primary">Ajouter</button>

</form>

    
    </section>
    </div>
    </main>
</body>

</html>