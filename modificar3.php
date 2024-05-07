<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conexion = mysqli_connect("localhost","root","","clinica")or die("problema con la conexion");
mysqli_query($conexion ,"UPDATE pacientes SET nombre='$_REQUEST[nombre]' WHERE habitaciones=$_REQUEST[habitaciones]") or die ("problema en el select" . mysqli_error($conexion));

echo "SE MODIFICO CORRECTAMENTE";



?>





</body>
</html>