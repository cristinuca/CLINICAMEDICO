<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "log/header.php"?>

       

    <?php

    $conexion = mysqli_connect("localhost","root","","clinica")or die("problema de conexion" . mysqli_error($conexion));

    $registros = mysqli_query($conexion, "SELECT * FROM pacientes WHERE codigo =$_REQUEST[codigo]") or die("problema con la select:" . mysqli_error($conexion));
    if($reg = mysqli_fetch_array($registros)){
      
        ?>


    <form action="modificar3.php" method="post">
    
    Ingrese el nuevo nombre del paciente:
    <input type="text" name="nombre" value="<?php echo $reg['nombre']?>">
     <input type="hidden" name="habitaciones" value="<?php echo $reg['habitaciones']?>">
     <br>
     Ingrese otro numero de habitacion:
     <input type="hidden" name="habitaciones" value="<?php echo $reg['habitaciones']?>">
      <br>
      <input type="submit" value="modificar">
    </form>

  <?php  


    }else{ 
    echo "no se puede modificar este registro";
    }

    ?>
</body>
</html>