<?php

$host='localhost';
$dbname='portefolio';
$user='root';
$pass='';

try {
    $conn = new PDO('mysql:host='. $host. ';dbname='. $dbname, $user, $pass);
} catch (PDOException $e) {
    echo "<script> alert('ERREUR de connexion à la bdd') </script>";
}

?>