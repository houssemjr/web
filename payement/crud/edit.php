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



//$sql= "UPDATE  `vol` SET  (`idVol`=:idVol,`titulaire`=:titulaire,`numero`=:numero,`cvv`=:cvv,`date_d`=:date_d,`Mois`=:Mois,`annee`=:annee,`heure_r`=:heure_r,`prixVol`=:prixVol,`nbPlace`=:nbPlace)WHERE idVol==idVol;";

$sql="UPDATE payement SET titulaire='$titulaire', numero='$numero', cvv='$cvv', tp='$type', Mois='$Mois', annee='$annee' WHERE id='$id'";
$query = $db->prepare($sql);
$datas =array(':titulaire'=>$titulaire, ':numero'=>$numero,':cvv'=>$cvv,'tp'=>$type,':Mois'=>$Mois, ':annee'=>$annee);
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
//$sql = 'UPDATE  `vol` SET (`titulaire`=:titulaire,`cvv`=:cvv,`numero`=:numero,`date_d`=:date_d) WHERE idVol==idVol;';

header('LOCATION: index.php');
}









    else {
        $_SESSION['erreur'] ="le formulaire est incomplet";
    }


if (isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');
    $id=($_GET['id']);
    $sql = 'SELECT * FROM `payement` WHERE  `id`  = :id;';
    $query=$db->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    $payement=$query->fetch();
    
    }
    else {
        $_SESSION['ERREUR']="vol INTROUVABLE"; 
        header('LOCATION: index.php');
    }
    





?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widVolth=device-widVolth, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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


    <center><h1>modifier  vols </h1> </center>
 
<form  method="post">
<div class="form-group">
<label for="titulaire">titulaire de carte</label>
<input type="text" id="titulaire" name="titulaire" class="form-control" value="<?= $payement['titulaire']?>">
</div>
<div class="form-group">
<label for="numero">numero </label>
<input type="number" id="numero" name="numero"  class="form-control"value="<?= $payement['numero']?>">
</div>
<div class="form_group">
<label for="cvv">cvv</label>
<input type="number" id="cvv" name="cvv" class="form-control"value="<?= $payement['cvv']?>">

</div>
<div class="form-group">
<label for="tp">type</label>
<input type="text" id="tp" name="tp"  class="form-control"value="<?= $payement['tp']?>">
</div>
<label for="Mois"> Mois d expiration </label>

    <input type="number" name="Mois" class="form-control"value="<?= $payement['Mois']?>">
</div>
<div class="form-group">

   

    <label for="annee">  Heure de depart</label>
    <input type="number" name="annee" class="form-control"value="<?= $payement['annee']?>">
 </div>
 
<input type="hidden" value="<?= $payement ['id']?>" name="id">
<button class="btn btn-primary">Ajouter</button>

</form>

    
    </section>
    </div>
    </main>
</body>

</html>