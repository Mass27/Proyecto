<!DOCTYPE html>
<html>
    <head>
        <link href="css/clase1.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/c61477260e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/b5/css/bootstrap.min.css"  >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    </head>
<body>
  <img class="img-cover" src="imgs/xeno/ss1.jpg">
  <?php require_once "vistas/header.php"?>

<main class="bm ancho">
<div class="product">
   
<img class="n-pic" src="imgs/xeno/xninfo.jpg">
  

<div class="info">
<div class="subinfos">
<a href="nintendo.html" class="plataform">Nintendo</a>

<div class="down">
    <img src="https://s3.gaming-cdn.com/themes/igv1/modules/product/images/ticked2.png"> stock
</div>
<div class="down">
    <img src="https://s3.gaming-cdn.com/themes/igv1/modules/product/images/ticked2.png"> Descarga
</div>

</div>

    <div class="tags">
    <a href="#" class="tag">Rpg</a>
    <a href="#" class="tag">Accion</a>
    <a href="#" class="tag">Aventura</a>
    </div>

    <div class="btn-buy">
    <span> 56.02$</span>
    <a href="pasarela.php" class="bc"> Comprar</a>
    </div>

</div>
</div>




<div class="information">




<div class="wrapper-video">

  <iframe width="1000" height="400" src="https://www.youtube.com/embed/KfjVIQug6_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>



<div class="ss">
    <a href="#img1"><img src="imgs/xeno/ss1.jpg" width="200" height="100"></a>
    <a href="#img2"><img src="imgs/xeno/ss2.jpg" width="200" height="100"></a>
    <a href="#img3"><img src="imgs/xeno/ss3.jpg" width="200" height="100"></a>
    <a href="#img4"><img src="imgs/xeno/ss4.jpg" width="200" height="100"></a>
    <a href="#img5"><img src="imgs/xeno/ss5.jpg" width="200" height="100"></a>
</div>

<article class="lightbox" id="img1">
  <a class="next" href="#img5">&#60;</a>
  <a href="#img2"><img src="imgs/xeno/ss1.jpg" ></a>
  <a class="next" href="#img2">></a>
  <a class="cerrar" href="#">X</a>
</article>


<article class="lightbox" id="img2">
  <a class="next" href="#img1">&#60;</a>
  <a href="#img3"><img src="imgs/xeno/ss2.jpg" ></a>
  <a class="next" href="#img3">></a>
  <a class="cerrar" href="#">X</a>
</article>


<article class="lightbox" id="img3">
  <a class="next" href="#img2">&#60;</a>
  <a href="#img4"><img src="imgs/xeno/ss3.jpg" ></a>
  <a class="next" href="#img4">></a>
  <a class="cerrar" href="#">X</a>
</article>


<article class="lightbox" id="img4">
  <a class="next" href="#img3">&#60;</a>
  <a href="#img5"><img src="imgs/xeno/ss4.jpg" ></a>
  <a class="next" href="#img5">></a>
  <a class="cerrar" href="#">X</a>
</article>


<article class="lightbox" id="img5">
  <a class="next" href="#img4">&#60;</a>
  <a href="#img1"><img src="imgs/xeno/ss5.jpg" ></a>
  <a class="next" href="#img1">></a>
  <a class="cerrar" href="#">X</a>
</article>


<div class="btndata">

<div class="description read">
  <span class="hide" id="htex">
<strong>Acerca de este juego</strong>
    <br> <br> 
Xenoblade Chronicles , conocido en Japón como Xenoblade (ゼノブレイド, Zenobureido), es un videojuego de rol publicado por Nintendo y 
desarrollado por Monolith Soft para la consola Wii y Nintendo Switch . El juego se anunció durante el E3 de 2009, cuando se lanzó un 
tráiler a los medios. El tráiler muestra un personaje futurista que empuña una espada y lucha contra criaturas y robots gigantes, así 
como un juego de exploración en tercera persona. En enero de 2010, el juego pasó a llamarse Monado: Beginning of the World a Xenoblade
 en honor a Tetsuya Takahashi, "quien dedicó su alma a hacer esto y que ha estado trabajando en la serie Xeno".
    <br><br>
<strong>Historia</strong>
    <br><br>
Únete a la lucha entre el hombre y la máquina en la edición definitiva de este juego de rol aclamado por la crítica. Descubre los orígenes 
de Shulk mientras él y sus compañeros se enfrentan a una amenaza mecánica aparentemente imparable. Empuñe una espada que ve el futuro, 
encadene ataques y posicione cuidadosamente a los miembros de su grupo en combates estratégicos en tiempo real mientras viaja a través 
de un mundo enorme, solo en el Nintendo Switch ™
    <br><br>
</div>
</span>

<button class="rmore" id="htbtn">Descripcion</button>

<span class="hide" id="reltext">

<div class="developer">
<h5>Fecha de lanzamiento:</h5>
<span> 5 Mayo 2020 </span>
</div>

<div class="developer">
<h5>Desarrollador:</h5>
<span>Monolith Soft</span>
</div>

<div class="developer">
<h5>Distribuidor:</h5>
<span>Nintendo</span>
</div>


</span>
<button class="rmore" id="btnrel">Release</button>
</div>
</div>


<!-- FIN DE LOS DATOS -->
</main>

<footer>
<?php require_once "vistas/footer.php"?>
</footer>
<script src="./script.js"></script>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>