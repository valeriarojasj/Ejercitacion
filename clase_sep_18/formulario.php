<?php

$errorNombre ='';
$errorEmail = '';
if($_POST){
   $nombre = $_POST['nombre'];
   { if(empty($nombre)){
       $errorNombre = 'Ingresa tu nombre';

        } else if(strlen($nombre)<3){
            $errorNombre = 'El nombre debe tener minimo 3 caracteres';

        }


   }
}
if($_POST){
    $email = $_POST['email'];
    { if(empty($email)){
        $errorEmail = 'Ingresa tu email';
 
         } else if(
            !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL){

 
         }
 
 
    }
 }
 

?>


<!DOCTYPE html>

<html>
    <head>


<title>Test</title>


    </head>
    <body>
        <form action="formulario.html" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email">
            <br>
            <input type="submit">
        </form>




    </body>

</html>