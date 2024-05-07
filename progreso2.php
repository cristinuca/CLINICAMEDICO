<?php include  'log/header.php'?>      

<?php


$conexion = mysqli_connect("localhost","root","","clinica") or  die ("problema de la conexion");


mysqli_query ($conexion,"INSERT INTO progreso(NOMBRE_DEL_PACIENTE,FECHA_DE_NACIMIENTO,DNI_DEL_PACIENTE,
IDENTIFICACION_MEDICA,PROXIMA_FECHA_DE_CITA,PROXIMA_FECHA_DE_REVISION,Fecha,
Detalles_Progreso)VALUES('$_REQUEST[NOMBRE_DEL_PACIENTE]','$_REQUEST[FECHA_DE_NACIMIENTO]','$_REQUEST[DNI_DEL_PACIENTE]',
'$_REQUEST[IDENTIFICACION_MEDICA]','$_REQUEST[PROXIMA_FECHA_DE_CITA]','$_REQUEST[PROXIMA_FECHA_DE_REVISION]','$_REQUEST[Fecha]','$_REQUEST[Detalles_Progreso]')")
or die("problema de la seleccion" . mysqli_error($conexion));


mysqli_close($conexion);






?>