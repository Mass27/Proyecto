<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/clase1.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/c61477260e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/b5/css/bootstrap.min.css"  >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Contactenos</title>
</head>
<body >
<img class="bkg-page" src="fondo.jpg">
<?php require_once "vistas/header.php"?>

<main class="ancho">

<form action="" class="comentarios">
        

<h4>Contactenos</h4>
<div>
        <span>Correo:</span>
        <input type="email" id="cor" placeholder="Introduzca su Correo" autofocus required>
        </div>
        <div>
        <span>Comentario:</span>
        </div>
         <textarea name="" id="comment" cols="30" rows="10"></textarea>
    
<div>
   <input class=" bc" type="submit" value="Enviar" > 
</div>


        </form>











</main>





<footer>

<?php require_once "vistas/footer.php"?>


</footer>








</body>
</html>