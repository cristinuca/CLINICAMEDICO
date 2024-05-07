<?php
$conexion =mysqli_connect("localhost","root","","clinica") or die ("problema con la conexion");

$registros = mysqli_query($conexion, "SELECT codigo from pacientes where codigo=$_REQUEST[codigo]")or die ("problema con el select: " .  mysqli_error($conexion));
 if($reg = mysqli_fetch_array($registros)){
mysqli_query($conexion, "DELETE from pacientes where codigo=$_REQUEST[codigo]") or die ("problema con el select" . mysqli_error($conexion));
 echo  "SE ELIMINO EL REGISTRO" ; 

 } else {
echo "NO EXISTE EL PACIENTE";


 }

mysqli_close($conexion);


?>