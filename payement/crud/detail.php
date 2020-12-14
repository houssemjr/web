<?php 

session_start(); 

if (isset($_GET['id']) && !empty($_GET['id'])){
require_once('connect.php');
$id=strip_tags($_GET['id']);
$sql = 'SELECT * FROM `payement` WHERE  `id`  = :id;';
$query=$db->prepare($sql);
$query->bindValue(':id',$id,PDO::PARAM_INT);
$query->execute();
$payement=$query->fetch();

}
else {
    $_SESSION['ERREUR']="PAYEMENT INTROUVABLE"; 
    header('LOCATION: index.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail de payement</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
   <main class="container">
   <div class="row">
   <section class="col-12">
   <h1>detail du payement  <?= $payement['titulaire']?></h1>
   <p>ID:  <?= $payement['id']?></p>
   <p> type de la carte :  <?= $payement['tp']?></p>
   <p> numero de la carte : <?=$payement['numero']?></p>
   <p>Mois d expirations :  <?= $payement['Mois']?></p>
   <p>annee d expirations :  <?= $payement['annee']?></p>

   <p>CVV:  <?= $payement['cvv']?></p>
   <p> <a href="index.php"> Retour </a><a href="edit.php?id=<? $payement['id'] ?>"> modifer </a></p>




   </section>
   </div>
   </main> 
</body>
</html>