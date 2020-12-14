<?php 

try {

    $db= new PDO('mysql:host=localhost;dbname=lolprotn','root','');
    $db->exec('SET NAMES "UTF8" ');
} catch (PDOException $e ){
echo '  ERREUR '.$e->getMessage();
    die();
}