<?php include "log/header.php"?>   <!----ATENCION ,ves que este archivo como otros no estan abiertos con bs5 o html,
                                      eso porque mira este enlace de php copiado del archivo HEADER, ahi entra todo incluido
                                      del header por eso tpco hay que cerrar ni nada--->




<form action="progreso2.php" type="submit" method="post;">  <!----estas cosas  del form para enlazar esta info con elboton de abajo
                                                                cuya info funcionar esta en progreso2 ok?------>
<div
    class="container"
>
    
<!---cosas izquierda---->
<div style="float:left; margin-left:200px; margin-top: 20px">


<form action="facturacion2.php" method="post">
    <br>
<div class="mb-3">
    <label for="" class="form-label"><h5>NOMBRE DEL PACIENTE</h5></label>
    <input
        type="text"
        class="form-control"
        name="NOMBRE_DEL_PACIENTE"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>


<div class="mb-3">
    <label for="" class="form-label"><h5>FECHA DE NACIMIENTO</h5></label>
    <input
        type="date"
        class="form-control"
        name="FECHA_DE_NACIMIENTO"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>



<div class="mb-3">
    <label for="" class="form-label"><h5>DNI DEL PACIENTE</h5></label>
    <input
        type="number"
        class="form-control"
        name="DNI_DEL_PACIENTE"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>


<div class="mb-3">
    <label for="" class="form-label"><h5>IDENTIFICACION MEDICA</h5></label>
    <input
        type="text"
        class="form-control"
        name="IDENTIFICACION_MEDICA"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>


<div class="mb-3">
    <label for="" class="form-label"><h5>PROXIMA FECHA DE CITA</h5></label>
    <input
        type="date"
        class="form-control"
        name="PROXIMA_FECHA_DE_CITA"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>


<div class="mb-3">
    <label for="" class="form-label"><h5>PROXIMA FECHA DE REVISION</h5></label>
    <input
        type="date"
        class="form-control"
        name="PROXIMA_FECHA_DE_REVISION"
        id=""
        aria-describedby="helpId"
        placeholder=""
     
    />
  
</div>


</div>
</div>

<div style="margin-left:900px;">
<h6 style="font-size: 40px;">PROGRESO DEL PACIENTE</h6>
</div>
<div
    class="table-responsive"
    style="width: 800px;"
>

    <table
        class="table table-primary"
        style="margin"
    >
        <thead>
            <tr>
                <th scope="col"  class="table-danger">Fecha</th>
                <th scope="col" class="table-warning">Detalles Progreso</th>
               
            </tr>
        </thead>

    </table>
  <div style="margin-left: 100px;">
    <input
            type="date"
            class="form-control"
            name="Fecha"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Detalles_Progreso"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;"
            data-bs-toggle="tooltip" 
        />

        </div>
</div>



<br><br><br>


<button
    type="submit"
    class="btn btn-dark"
    style="margin-top:30px; margin-left: 400px;"
>
Guardar


</button>


</form>
