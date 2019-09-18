<?php

$errorNombre ='';
$errorEmail = '';
$nombre ='';
$email='';
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
    if(empty($email)){
        $errorEmail = 'Ingresa tu email';
      } else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
              $errorEmail = 'El nombre o la contraseña no son validos';
         }  if(empty($errorNombre)&&empty($errorEmail)){
             header('location: exito.php');
           }else if(!empty($errorNombre)&&empty($errorEmail)){$nombre ='';}else if
           (empty($errorNombre)&&!empty($errorEmail)){$email ='';}else if(!empty($errorNombre)&&!empty($errorEmail)){$email ='';$nombre ='';}



    }



?>


<!DOCTYPE html>

<html>
    <head>


<title>Test</title>


    </head>
    <body>
        <form action="formulario.php" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" value="<?=$nombre?>">
            <p><?=$errorNombre ?></p>
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" value="<?=$email?>">
            <p><?=$errorEmail?></p>
            <br>
            <input type="submit">
        </form>




    </body>

</html>
