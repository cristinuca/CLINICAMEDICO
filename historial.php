<?php include "log/header.php"?>
<h6 style="margin-left: 315px; font-size: 30px;">HISTORIAL MEDICO</h6>
<div class="container">
    <!---cosas izquierda---->
    <div style="float:left; margin-left:20px; margin-top: 20px">
        <form action="facturacion2.php" method="post">
            <br>
            <div class="mb-3" style="margin: 0 auto; width: 300px;">
                <label for="" class="form-label"><h5>Nombre del Paciente</h5></label>
                <input
                    type="text"
                    class="form-control"
                    name="Nombre del Paciente"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3" style="margin: 0 auto; width: 300px;">
                <label for="" class="form-label"><h5>Nombre del Medico</h5></label>
                <input
                    type="text"
                    class="form-control"
                    name="Nombre del Medico"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3" style="margin: 0 auto; width: 300px;">
                <label for="" class="form-label"><h5>Nombre de Farmacia</h5></label>
                <input
                    type="text"
                    class="form-control"
                    name="Nombre de Farmacia"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
        </div>
    </div>

    <div class="container">
        <div style="float:left; margin-left:20px; margin-top: 40px;">
            <div class="mb-3" style="float: right; margin-right:100px; width: 300px;">
                <label for="" class="form-label"><h5>Fecha Actualizacion</h5></label>
                <input
                    type="date"
                    class="form-control"
                    name="Fecha Actualizacion"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3" style="margin: 0 auto; width: 300px;">
                <label for="" class="form-label"><h5>1º Telefono</h5></label>
                <input
                    type="number"
                    class="form-control"
                    name="1º Telefono"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3" style="margin: 0 auto; width: 300px;">
                <label for="" class="form-label"><h5>2º Telefono</h5></label>
                <input
                    type="number"
                    class="form-control"
                    name="2º Telefono"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
        </div>
    </div>

    <!----Las Tablas ----->

   <div
    class="container"
   >
   
<h6>PROGRESO DE PACIENTES</h6>
       
    <div style="margin: 0 auto; width: 800px;">
      

        <div class="table-responsive" style="margin: 0 auto; width: 800px; margin-top:100px;">
        <h4 style="text-align:center">MEDICAMENTOS ACTUALES Y PASADOS</h4>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">Nombre del medicamento</th>
                        <th scope="col" class="table-dark">Dosificacion</th>
                        <th scope="col" class="table-dark">Proposito</th>
                    </tr>
                </thead>
            </table>
      




        <input
            type="text"
            class="form-control"
            name="Nombre del medicamento"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Dosificacion"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Proposito"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;"
            data-bs-toggle="tooltip" 
        />




        </div>
        </div>
        </div>


        <div class="table-responsive" style="margin: 0 auto; width: 800px; margin-top:100px;">
        <h4 style="text-align:center">PROCEDIMIENTOS QUIRURGICOS</h4>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">Procedimiento</th>
                        <th scope="col" class="table-dark">Medicos</th>
                        <th scope="col" class="table-dark">Hospital</th>
                        <th scope="col" class="table-dark">Fecha</th>
                        <th scope="col" class="table-dark">Notas</th>
                    </tr>
                </thead>
            </table>

            <input
            type="text"
            class="form-control"
            name="Procedimiento"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Medicos"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Hospital"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;"
            data-bs-toggle="tooltip" 
        />

        <input
            type="text"
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
            name="Notas"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />
        
        </div>
        </div>
        </div>


        <div class="table-responsive" style="margin: 0 auto; width: 800px; margin-top:100px;">
        <h4 style="text-align:center">ENFERMEDADES GRAVES</h4>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">Enfermedad</th>
                        <th scope="col" class="table-dark">Fecha Inicio</th>
                        <th scope="col" class="table-dark">Fecha Final</th>
                        <th scope="col" class="table-dark">Medico</th>
                        <th scope="col" class="table-dark">Tratamiento</th>
                    </tr>
                </thead>
            </table>

            <input
            type="text"
            class="form-control"
            name="Enfermedad"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:200px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Fecha Inicio"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:150px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Fecha Final"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:150px ;"
            data-bs-toggle="tooltip" 
        />

        <input
            type="text"
            class="form-control"
            name="Medico"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:150px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Tratamiento"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:150px ;float:left"
            data-bs-toggle="tooltip" 
        />

        </div>
        </div>
        </div>
    
        <!----ultimas 2 tablas----->





        
        <div class="table-responsive" style="margin: 0 auto; width: 400px; margin-top:100px;">
        <h4 style="text-align:center;">VACUNAS</h4>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">Nombre</th>
                        <th scope="col" class="table-dark">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <td scope="row">Tetanos</td>
                        
                    </tr>

                    <tr class="table-secondary">
                        <td scope="row">Vacunas</td>
                        
                    </tr>

                    <tr class="table-secondary">
                        <td scope="row">Operaciones</td>
                        
                    </tr>

                    <tr class="table-secondary">
                        <td scope="row">Otro</td>
                       
                    </tr>
                </tbody>
            </table>

            <input
            type="text"
            class="form-control"
            name="Tetanos"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:100px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Vacunas"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;"
            data-bs-toggle="tooltip" 
        />

        <input
            type="text"
            class="form-control"
            name="Operaciones"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Otros"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />










        </div>

        <div class="table-responsive" style="margin: 0 auto; width: 400px; margin-top: -343px; margin-left: 100px;">
        <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">Nombre</th>
                        <th scope="col" class="table-dark">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <td scope="row">Fiebre Amarilla</td>
                       
                    </tr>

        
                    <tr class="table-secondary">
                        <td scope="row">Fiebre Tifoidea</td>
                       
                    </tr>

                    <tr class="table-secondary">
                        <td scope="row">Malaria</td>
                      
                    </tr>

                    <tr class="table-secondary">
                        <td scope="row">Otros</td>
                        
                    </tr>

                </tbody>
            </table>

            <input
            type="text"
            class="form-control"
            name="Fiebre Amarilla"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Fiebre Tifoidea"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;"
            data-bs-toggle="tooltip" 
        />

        <input
            type="text"
            class="form-control"
            name="Malaria"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        <input
            type="text"
            class="form-control"
            name="Otros"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
            data-bs-toggle="tooltip" 
        />



        </div>

        </form>
       