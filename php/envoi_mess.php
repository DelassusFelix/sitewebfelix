<?php

include 'connexion.php';

if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mess'])) {

    extract($_POST);

    $stmt = $conn->prepare("INSERT INTO contact(nomMess, prenomMess, mailMess, corpsMess) VALUES (:nom, :prenom, :mail, :mess)");
    $stmt->bindParam(":nom",$nom);
    $stmt->bindParam(":prenom",$prenom);
    $stmt->bindParam(":mail",$mail);
    $stmt->bindParam(":mess",$mess);

    $stmt->execute();

    header("Location:../contact.html");
}

?>