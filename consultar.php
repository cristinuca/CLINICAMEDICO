<?php include  'log/header.php'?>   <!---Acuerdate, esto es el enncabezado de la pag principal naada mas--->


<!--en form action:archivo conexion,method:post---->
<form action="consultar2.php" method="post">         <!---NAME de abajo muy importante, eso saca info de BD y dentro pongo nombre del WHERE REQUEST(aunque puedo usar
                                                           cualquier nombre del echo eso es el nombre que uso para buscar datos en el boton Consultar)---->
<input type="text" placeholder="NOMBRE PACIENTE" name="NOMBRE_DEL_PACIENTE">    <!---PLACEHOLDER es para imput escrito dentro alpinchr desaparece para q escribas--->
<br>   <!--type text pero si es numero:number, fecha:date etc--->


<input type="submit" value="Consultar Progreso">  <!---type. SUBMIT para buscar info, value: es el nombre del boton pero va dentro de value
                                                         porque input como otros no cierra entiendes ?entonces pongo un value dentro 
                                                          y coloco el nombre y ya.POR ej en boton, eso cierra y coloco dentro entiendes?
                                                           facil ya esta------>

</form>


<!-------Puedes añadir otro boton para el historial y volver a hacer la conexion y BD del historial |||| o de CLINICA 
             si qro info de absolutamente todo---->




