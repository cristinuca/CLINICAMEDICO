


<?php include  'log/header.php'
?>






<?php





$conexion = mysqli_connect("localhost","root","","clinica") or  die ("problema de la conexion");

mysqli_query($conexion,"INSERT INTO pacientes(codigo,nombre,habitaciones)VALUES('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[habitaciones]')")
or die("problema de la seleccion" . mysqli_error($conexion));


mysqli_close($conexion);

echo "<h1 style='color:white; border:22px solid orange; width:400px; margin-top:100px; margin-left: 350px'>";




echo "el paciente fue registrado correctamente";


echo "</h1>";


?>