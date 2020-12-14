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



$sql = 'DELETE  FROM `payement` WHERE  `id`  = :id;';
$query=$db->prepare($sql);
$query->bindValue(':id',$id,PDO::PARAM_INT);
$query->execute();
$_SESSION['ERREUR']="PAYEMENT supprimé"; 
header('LOCATION: index.php');}


else {
    $_SESSION['ERREUR']="PAYEMENT INTROUVABLE"; 
    header('LOCATION: index.php');
}

?>
