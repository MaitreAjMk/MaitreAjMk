   <?php
/*
     
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
    $nom =($_POST['nom']);
    $prenom =($_POST['prenom']);
    $Email =($_POST['Email']);
    $services =($_POST['services']);
    $genre =($_POST['genre']);
    $université =($_POST['université']);
    $age=($_POST['age']);


    $Createsql= "INSERT INTO  `etudiant` (first_name,last_name,email,genre,age,servic,univers)
                  VALUES('$nom','$prenom','$Email','$genre','$age', '$services','$université')";

                  $res=mysqli_query($con,$Createsql) or die(mysqli_error($con));

                  if($res){
                      $msg= "insertion avec succès";
                  }
                  else{
                      $msg="erreur d'insertion";
                  }

}
*/

include('connexion.php');
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



  $requete = "select * from etudiant where first_name =? AND last_name=? AND email=? AND genre=?  AND age=? AND  servic=? AND univers=?";
$ct= new PDO("mysql:host=$host;dbname=$base" ,$user,"");
$prepare= $ct->prepare($requete);
$tab=array($nom, $prenom,$Email,$services, $genre, $age,$université );
$execute=$prepare->execute($tab);
$donnee= $prepare->fetch(PDO::FETCH_ASSOC);
var_dump($prepare);
if($execute==true){
    $msg="AJOUT EFFECTUE AVEC SUCCES !";
}else{
    $msg="AJOUT NON EFFECTUE !";
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  

<div class="container">
    <div class="row pt-4">
        <form  method="post" class="form-horizontal col-md-6 pt-4">
            <h2>AJOUTER vos information</h2>

         
            <?php echo(isset($msg)?$msg:"");?>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">nom</label>
                <div class="col-sm-10">
                    <input type="text " name="nom" placeholder="nom" class="form-control
                    " id="input"> 
                </div>
            </div>
                    
            
                <label for="input1" class="col-sm-2 control-label">Prenoms</label>
                <div class="col-sm-10">
                    <input type="text " name="prenom" placeholder="prenom" class="form-control
                    " id="input"> 
                </div>
            </div>


            
                <label for="input1" class="col control-label">Email</label>
                <div class="col-sm-6">
                    <input type="Email " name="Email" placeholder="Email" class="form-control
                    " id="input"> 
                </div>

                
                <label for="input1" class="col control-label">université fréquenté</label>
                <div class="col-sm-6">
                    <input type="text " name="université" placeholder="université" class="form-control
                    " id="input"> 
                </div>
                


                <label for="input1" class="col control-label">services</label>
            <div class="col-sm-6">
                   <select name="services" class="form-control">
                   
                       <option value="informatiques">informatiques</option>
                       <option value="infographe">infographe</option>
                       <option value="communication">communication</option> 
                       <option value="marketing">marketing</option>
                   </select>
                </div>


                <div class="form-group">
                  <label for="input1" class="col control-label">Genre:&nbsp;</label>
            
                <label for="">
                <input type="radio" name="genre" id="optionsradios" value="h" checked>
                    H
                </label>
                <input type="radio" name="genre" id="optionsradios" value="f" checked>
                    F
                </label>

            
                </div>

                
                  
                <label for="input1" class="col control-label">Ages</label>
            <div class="col-sm-6">
                  <!-- <select name="age" class="form-control">
                   <option value=""></option>
                       <option value="20">20</option>
                       <option value="21">21</option>
                       <option value="22">22</option> 
                       <option value="23">23</option>
                       <option value="plus">plus de 25 ans</option>
                   </select>
                </div>-->
                <input type="number" name="age" placeholder="age" class=" col-6 form-control">

                <div class="pt-4">
                  <input type="submit" value="ajouter" class="btn btn-primary m-3">
                 <a href="view.php">
                     <button class="btn btn-success" type="button">
                         liste des stagiaires 
                     </button>
                 </a>
                      
                  
                  
              </div>
              </div>


            
            
            </div>




           

        </form>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

