

<?php include  'log/header.php'?>


<?php

$conexion = mysqli_connect("localhost","root","","clinica") or  die ("problema de la conexion");


mysqli_query ($conexion,"INSERT INTO index2(Ingerse_el_nombre, Ingrese_codigo)VALUES('$_REQUEST[Ingrese_el_nombre]','$_REQUEST[Ingrese_codigo]')")
or die("problema de la seleccion" . mysqli_error($conexion));


mysqli_close($conexion);



?>