<?php include "log/header.php"?>

<div
    class="container"
>
    
<!---cosas izquierda---->
<div style="float:left; margin-left:200px; margin-top: 20px">
<img src="img/logo.png" alt="" style="width: 100px; height: 100px; border: 10px">

<form action="facturacion2.php" method="post">
    <br>
<div class="mb-3">
    <label for="" class="form-label"><h5>DE</h5></label>
    <input
        type="text"
        class="form-control"
        name="clinica"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Direccion Clinica</h5></label>
    <textarea class="form-control" name="" id="" rows="3"></textarea>
</div>

</div>

<!-----cosas derecha------>

<div style="float: right; margin-right:100px">
<h2 style="border: 2px solid blue; background-color: orange;">PRESUPUESTO</h2>

<div class="mb-3">
    <label for="" class="form-label"><h5>Fecha presupuesto</h5></label>
    <input
        type="date"
        class="form-control"
        name="fecha_inicio"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
   
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Fecha Vencimiento</h5></label>
    <input
        type="date"
        class="form-control"
        name="fecha_final"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
   
</div>

<div class="mb-3">
    <label for="" class="form-label"><h5>Presupuesto</h5></label>
    <input
        type="text"
        class="form-control"
        name="nombre_cliente"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
   
</div>




<div class="mb-3">
    <label for="" class="form-label"><h5>Direccion Cliente</h5></label>
    <textarea class="form-control" name="direccion_cliente" id="" rows="3"></textarea>
</div>

</div>

</div>



<div
    class="container"
>
    
<div style="padding: 14px; background-color: blue; margin-top: 500px; width: 700px; text-align: center; color: pink;">

<h4>Calcular Presupuesto</h4>


</div>
</div>






<div
    class="container"
    style="float: left; margin-left: 250px"
>
   
<div class="mt-4 p-5 bg-primary text-white rounded" style="width: 300px; margin-top: -220px; margin-right: 200px;"> 

CITA MEDICA(incluye):

<ul>
<li>Cita personalizada</li>
<li>Toma de examen</li>
<li>Seguimiento</li>

</ul>
</div>
</div>



<div class="mb-3" style="float: right;">
    <label for="" class="form-label">Nº de Consultas</label>
    <input
        type="number"
        class="form-control"
        name=""
        id="valor1"
        aria-describedby="helpId"
        placeholder=""
        oninput="calcular";
    />
  





    <label for="" class="form-label">Abono</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="valor2"
        aria-describedby="helpId"
        placeholder=""
        oninput="calcular";     
    />        
  
    <!----ONINPUT para enlazar algo----->



    <label for="" class="form-label">Total a pagar</label>
    <input
        type="number"
        class="form-control"
        name="precio_consulta"
        id="total"
        aria-describedby="helpId"
        placeholder=""
        oninput="total";
    />
    



<script type="text/javascript">
    function calcular(){
try{
  var a=parseFloat(document.getElementById("valor1").value) || 0;
  var a=parseFloat(document.getElementById("valor2").value) || 0;
  document.getElementById("total").value=a*50-b;
}catch(e) 

}

</script>

<button onclick="window.print()" style="margin-left: 900px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg></button>Imprimir



<button type="submit" value="registrar">Registrar</button>



</div>


</form>




