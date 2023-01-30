<!DOCTYPE html>
<html>

<head>
<link href="css/clase1.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/c61477260e.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>  YOIGEMU</title>
</head>


   
<body >
<img class="bkg-page" src="fondo.jpg">
<?php require_once "vistas/header.php"?>
 

<div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="imgs/thumb1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/black.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/thumb2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden ">Next</span>
  </button>
</div>




<div class="panel-center">

<div class="item">
<a href="itt.php" ><img  src="imgs/it/itsinfo.jpg"></a>
<div class="pv">19.48$</div>
<div class="name">It takes two</div>
</div>

<div class="item">
<a href="bf.php"><img src="imgs/bf/bf2info.jpg"></a>
<div class="pv">30.02$</div>
<div class="name">Battlefield 2042</div>
</div>

<div class="item">
<a href="fnaf.php"><img src="imgs/fnaf/fnafsinfo.jpg"></a>
<div class="pv"> 45.28$</div>
<div class="name">Fnaf:Security Breach</div>
</div>

<div class="item">
<a href="world.php"><img src="imgs/nw/nwinfo.jpg"></a>
<div class="pv"> 30.19.$</div>
<div class="name">New world </div>
</div>

<div class="item">
<a href="gow.php"><img src="imgs/gow/gowinfo.jpg"></a>
<div class="pv">35.15.$</div>
<div class="name">God of war </div>
</div>
  
<div class="item">
<a href="halo.php" ><img src="imgs/halo/hinfo.jpg"></a>
<div class="pv"> 44.19.$</div>
<div class="name">Halo Infinite </div>
</div>

<div class="item">
<a href="au.php"><img src="imgs/assas/auinfo.jpg"></a>
<div class="pv"> 6.19.$</div>
<div class="name">Assasins Creed Unity </div>
</div>

<div class="item">
<a href="dyl.php"><img src="imgs/dyl/dylinfo.jpg"></a>
<div class="pv"> 54.19.$</div>
<div class="name">DyingLight2:Stay Human</div>
</div>
    
<div class="item">
<a href="forza.php"><img src="imgs/forza/fh5info.jpg"></a>
<div class="pv"> 49.34.$</div>
<div class="name">Forza Horizon 5 </div>
</div>
      
<div class="item">
<a href="mc.php"><img src="imgs/min/mninfo.jpg"></a>
<div class="pv">16.78.$</div>
<div class="name">MInecraft</div>
</div>
      
</div>




<nav class="navbar navbar-expand-lg navbar-light inline ancho">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="https://vandal.elespanol.com"> <i class="fas fa-newspaper"></i>Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
    
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"></li>
            <li><a class="dropdown-item" href="#"></a></li>
            
          <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>




<form class="prox-width">

<section>

  <video id="slider" muted loop autoplay>
  <source src="imgs/video1.mp4" type="video/mp4">
  </video>
  
<ul class="navigation">   
  <li onclick="cargarVideo('imgs/1.mp4');"> <img  src="imgs/cover3.jpg"> </li>
  <li onclick="cargarVideo('imgs/2.mp4');"> <img  src="imgs/cover2.jpg"> </li>
  <li onclick="cargarVideo('imgs/3.mp4');"> <img  src="imgs/cover1.jpg"> </li>
</ul>
</section>
</form>


<footer>
<?php require_once "vistas/footer.php"?>
</footer>

</body>

<script type="text/javascript">
  function cargarVideo(url){
  document.getElementById('slider').src=url;
  }
</script>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>