<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>accueil de stage</title>
    

<style>
    @import url('https://fonts.googleapis.com/css2? famille= Poppins:wght@500;600 & display=swap');
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Poppins', sans empattement ;
    }

    :root{
        --main-color: #f0b30f; 
    }
    .theme-text{
        color: var(--main-color);
    }

    .navbar-brand{
        color :var(--main-color) !important;
    }
    .act{
        color:var(--main-color) !important;
        border-bottom: 2px solid var(--main-color);
    }

    .navbar ul li a:hover{
        color:var(--main-color) !important;
        border-bottom: 2px solid var(--main-color);
    }
    .header{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.6)), url("ACCUEIL.jpg");
        width: 100%;
        height: 100vh;
        background-position: center;
        background-size: cover;
        position: relative;
      

    }
    .wave{
        position: absolute;
        bottom: 0px;
    }
    .middle{
        height: 80vh;
        width: 80%;
        display: flex;
        justify-content: start;
        align-items: center;
    }
    .middle h1{
        font-size: 60px;
    }

</style>

</head>
<body>

    <section class="header">
        <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid fw-bold">

  <!-- ici je vais placer l'icone home-->  
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f0b30f" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>

    <a class="navbar-brand" href="#" > &nbsp; AjmkTechnologie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          
        
          <a class="nav-link act" aria-current="page" href="#">accueil</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="form.php">connexion</a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>




        <div class="middle">
            <h1 class="text-white">soyez les bienvenue sur notre  <br> <span class="theme-text">site de stage</span> </h1>
    </div>

      
 </div>
  <!--pour le waves -->
  <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
             d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <section>
    
    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="ACCUEIL.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="ACCUEIL.jpg" width="500px"  height="300%" class="card-img-top " alt="...">
      <div class="card-body">
        <h5 class="card-title">PRESIDENT DE AJMKTECHNologie</h5>
        <p class="card-text">AjmkTechnologie diffuse toute l'année des offres de stages en Côte d'Ivoire.
 
 Yamoussoukro, la capitale, offre de propositions de stages mais c'est surtout à Abidjan que se concentre les activités économiques et politiques. Vous travaillerez en français la plupart du temps. 
 Si vous n'êtes pas membre de l'association et que vous ne souhaitez pas le devenir, voici un petit extrait des offres de stages auxquelles vous pouvez postuler sans être adhérent(e) de l'association TELI. Les autres offres sont réservées aux membres.
  
 Si vous cherchez un stage en Côte d'Ivoire pour 2022, pensez à vous y prendre au moins 4 à 6 mois à l'avance.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="ACCUEIL.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="IMG.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

    </section>


    <footer class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white text-capitalize font-weight-light p-3">AjmkTechnologie</h1>
                    <h3 class="text-light font-weight font-italic mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>
                    <div class="py-2">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
                
            </div>
        </div>

    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

