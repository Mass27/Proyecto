<?php
//parametros de la conexion
$server="localhost";
$usuario="root";
$contra="";
$bd="pagina";

// Campos
$name=$_POST['nombre'];
$passw=$_POST['password'];
$email=$_POST['email'];
$cipher_passw = password_hash($passw,PASSWORD_DEFAULT) ;

$cxn = new mysqli($server,$usuario,$contra,$bd);

if($cxn -> connect_error)
   die("Connecion fallo: " . $cxn->connect_error);

   else {

    $sql_query="INSERT INTO userlogin (user,user_password,email) 
                 VALUES('$name','$cipher_passw',$email)";
    //echo $sql_query;             
   if($cxn->query($sql_query) === TRUE) 
   {
      echo"Usuario Registrado exitosamente";
      //header("Location: forma1.html");
      echo"<meta http-equiv='refresh' content='3;url=loginy.html'>";
    }
   else
     echo"Error al intentar Registrar el usuario"; 

}
?>
