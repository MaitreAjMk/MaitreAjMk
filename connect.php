<?php
include('index..php');
$user='root';
$host='localhost';
$base='stage';
?>
<?php

if(isset($_POST['nom'])){
  $nom =($_POST['nom']);
  $prenom =($_POST['prenom']);
  $Email =($_POST['Email']);
  $services =($_POST['services']);
  $genre =($_POST['genre']);
  $université =($_POST['université']);
  $age=($_POST['age']);



 
$ct= new PDO("mysql:host=$host;dbname=$base" ,$user,"");
$requete="insert into etudiant (first_name,last_name,email,genre,age,servic,univers) values(?,?,?,?,?,?)";
$prepare= $ct->prepare($requete);
$tab=array($motcle,$cat,$trie,$od);
$execute=$prepare->execute($tab);
var_dump($prepare);
if($execute==true){
    $msg="AJOUT EFFECTUE AVEC SUCCES !";
}else{
    $msg="AJOUT NON EFFECTUE !";
}

}
?>