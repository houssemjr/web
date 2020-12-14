<?php

require_once ("../crud/connect.php");

$sql='SELECT * FROM `payement`WHERE id=1;';

$query=$db->prepare($sql);
$query->execute();

$result=$query->fetchAll(PDO::FETCH_ASSOC);
require_once ('../crud/close.php');








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>votre payement</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    
<center><h1>Listes des payements </h1> </center>
    <table class="table">
    <thead>
    <th>ID</th>
    <th>Titulaire de la carte</th>
    <th>numero carte</th>  
             <th>Cvv</th>
      <th>type</th>
    <th>Mois d expirations</th>
    <th>Anne d expirations</th>
    <th>Actions</th>


    </thead>
    <tbody>
    
    <?php
    foreach($result as $payement){
    ?>
    <tr>
    <td><?= $payement['id'] ?></td>
    <td><?= $payement['titulaire'] ?></td>
    <td><?= $payement['numero'] ?></td>
    <td><?= $payement['cvv'] ?></td>
    <td><?= $payement['tp'] ?></td>

    <td><?= $payement['Mois'] ?></td>
    <td><?= $payement['annee'] ?></td>
    </tr>
    <?php



    }

    ?>
    
    </tbody>
    
    </table>
    <a href="../crud/add.php" class="btn btn-primary">ajouter </a> 
    
    
    </section>
    </div>
    </main>
</body>
</html>