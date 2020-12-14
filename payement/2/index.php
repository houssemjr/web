<?php 

session_start(); 

require_once ('connect.php');
$sql='SELECT * FROM `payement`';

 $query=$db->prepare($sql);
 $query->execute();
 
 $result=$query->fetchAll(PDO::FETCH_ASSOC);
require_once ('close.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLEAU DE PAYEMENT</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>
    <main class="container">
    <div class="row">
    <section class="col-12">

    <?php
if (!empty($_SESSION['message'])){

echo '<div class="alert alert-success" role="alert">'. $_SESSION['message']. '</div>';
$_SESSION['message'] = "";
}
?>

    <center><h1>Listes des payements </h1> </center>
    <table class="table">
    <thead>
    <th>ID</th>
    <th>Titulaire de la carte</th>
    <th>type</th>
    <th>numero carte</th>  
    <th>Mois d expirations</th>
    <th>Anne d expirations</th>
     <th>Cvv</th>
    <th>Actions</th>


    </thead>
    <tbody>
    
    <?php
    foreach($result as $payement){
    ?>
    <tr>
    <td><?= $payement['id'] ?></td>
    <td><?= $payement['titulaire'] ?></td>
    <td><?= $payement['tp'] ?></td>
    <td><?= $payement['numero'] ?></td>
    <td><?= $payement['Mois'] ?></td>
    <td><?= $payement['annee'] ?></td>
    <td><?= $payement['cvv'] ?></td>
    <td><a href="detail.php?id=<?= $payement['id']?>">voir </a><a href="edit.php?id=<?= $payement['id']?>">modifier </a> <a href="delete.php?id=<?= $payement['id']?>">supprimer </a> </td>
    
    </tr>
    <?php



    }

    ?>
    
    </tbody>
    
    </table>
    <a href="add.php" class="btn btn-primary">ajouter </a> 
    
    </section>
    </div>
    </main>
</body>
</html>