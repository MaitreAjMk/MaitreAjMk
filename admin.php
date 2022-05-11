<?php
include('connexion.php');

$requete="select*from etudiant";
$prepare=$ct->prepare($requete);
$execute=$prepare->execute();
$donnee= $prepare->fetch(PDO::FETCH_ASSOC);

//var_dump($execute,$prepare);

?>