<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8"/>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="Twitter_logo_2012.svg.png" width="35" height="30" class="d-inline-block align-top"/>
    </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" class="d-inline-block align-top">
       <h5 class="mb-0" style="color: white">Perfil</h5> 
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar tweets" aria-label="Buscar">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="img-fluid" style="position: relative;">
    <img src="background.jpg" class="img-fluid" style="position:absolute; z-index: 1;" alt="Responsive image">
        <div style="border-radius: 730px;"width="35" height="30" >
          <img src="perfil.jpg" style="position:absolute; left:1px; top:242px; left: 140px; z-index: 2; border-radius: 50%; height: 210px; width: 210px;" alt="...">
        </div>
        <div style="width: 700px;">
          <button class="btn btn-primary btn-sm " style="border-radius: 7%; color:white; font-weight: bold; position:absolute; width: 100px; top: 418px; left: 28%; z-index: 3;" type="submit">Editar</button>
        </div>
</div>

<form action="#" method="POST" target="_self">
<div  class="container" style=" background-color : #343a40;">
<div class="input-group" style="position: relative; top: 480px; width: 100%; margin-right: auto; margin-left: auto;" >
  <input  type="text"   name="tweetar" style="height: 100px; border: 1px solid  rgba(21, 32, 43, 0.5); font-size: 21px;" class="form-control" placeholder="O que está acontecendo?" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
  <?php $tweet =($_POST['tweetar']) ? $_POST['tweetar'] : '';

 
     ?>
  <div class="input-group-append"   id="button-addon4">
   <button class="btn btn-primary" style="height: 40px; top: 30%; left: 10%; border-radius: 7px;" type="submit">Tweetar</button>
   
  </div>
 
</div>
</div>

</form>



<ul class="nav nav-pills nav-fill" style="position: relative;  width: 100%; top: 530px; border: 0px 0px 1px 0px solid #ccc; border-radius: 10px;">
  <li class="nav-item">
    <a class="nav-link " href="#">Tweets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Tweets e Respostas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Mídia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Curtidas</a>
  </li>
  
</ul>



<div class="card" style="position: relative; margin: 20px; top: 580px; width: 50%; margin-right: auto; margin-left: auto; background-color: rgb(21, 32, 43);">
  <div class="card-header" style="font-weight: bold; color: white; ">
   Tweet
  </div>
  <div class="card-body" style=" color: white;">
            <img src="perfil.jpg" style="position:relative; left:1px; top:-5px; left: 0px; z-index: 2; border-radius: 50%; height: 40px; width: 40px;" alt="...">
            <span style="font-weight: bold; margin-left: 7px;">Nicoly Jobs</span>
    <h5 style="margin-top: 5px;" class="card-title"></h5>
     <?php
      echo $tweet;
    ?>
    <p class="card-text" ></p>
   
  </div>
</div>






</body>
</html>