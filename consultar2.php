
<?php include  'log/header.php'?>   <!------Formula para consultar info desde BD
  ESte lo copio en todos archivos para que se enlace todo-->

<?php
                           
$conexion =mysqli_connect ("localhost","root","","clinica") or die ("problema con la conexion");  

$registros =mysqli_query ($conexion, "SELECT * FROM progreso WHERE NOMBRE_DEL_PACIENTE='$_REQUEST[NOMBRE_DEL_PACIENTE]'") or die
("problema con la seleccion" . mysqli_error($conexion));
 
if ($reg = mysqli_fetch_array ($registros)){
echo "<strong>Nombre paciente:</strong> " . $reg['NOMBRE_DEL_PACIENTE'] . "<br>";
echo "<strong>Fecha nacimiento:</strong> " . $reg['FECHA_DE_NACIMIENTO'] . "<br>";     
echo "<strong>DNI paciente: </strong> " . $reg['DNI_DEL_PACIENTE'] . "<br>"; 
echo "<strong>Identificacion medica:</strong> " . $reg['IDENTIFICACION_MEDICA'] . "<br>";
echo "<strong>Proxima fecha cita:</strong> " . $reg['PROXIMA_FECHA_DE_CITA'] . "<br>";     
echo "<strong>Proxima fecha revision:</strong> " . $reg['PROXIMA_FECHA_DE_REVISION'] . "<br>"; 
echo "<strong>Fecha: </strong> " . $reg['Fecha'] . "<br>";
echo "<strong>Detalles progreso: </strong> " . $reg['Detalles_Progreso'] . "<br>"; 
}else{

    echo "nombre es incorrecto";
    
    }


mysqli_close($conexion);


?>