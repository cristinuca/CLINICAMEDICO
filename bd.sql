select * FROM pacientes                                             /*EXPLICACION  completa*/
                                                                   /*float decimales y date fechas*/

use clinica;



CREATE table facturacion(
clinica VARCHAR (20),
direccion_clinica VARCHAR (100),
fecha_inicio DATE (10),
fecha_final DATE (10),
nombre_cliente VARCHAR (20),
direccion_cliente VARCHAR (100),
precio_consulta INT (10));




CREATE table historial(
Nombre_del_Paciente VARCHAR (30),
Nombre_del_Medico VARCHAR (30),
Nombre_de_Farmacia VARCHAR (30),
Fecha_Actualizacion INT (10),
1º_Telefono INT (12),
2º_Telefono INT (12),                /*Float para decimales INT para enteros*/
Nombre_del_medicamento VARCHAR (40),
Dosificacion INT (50),
Proposito VARCHAR (100),                            
Procedimiento VARCHAR (200),
Medicos  VARCHAR (30),
Hospital VARCHAR (30),
Fecha INT (10),
Notas VARCHAR (200),
Enfermedad VARCHAR (30),
Fecha_Inicio INT (10),
Fecha_Final INT (10),
Medico VARCHAR (20),
Tratamiento VARCHAR (200),
Fiebre_Amarilla VARCHAR (40),
Fiebre_Tifoidea VARCHAR (40),
Malaria VARCHAR (40),
Otro VARCHAR (40),
Tetanos VARCHAR (40),
Vacunas VARCHAR (40),
Operaciones VARCHAR (40),
Otros VARCHAR (40));



CREATE TABLE progreso(
NOMBRE_DEL_PACIENTE VARCHAR (40),
FECHA_DE_NACIMIENTO DATE,
DNI_DEL_PACIENTE INT (20),
IDENTIFICACION_MEDICA VARCHAR (30),                 
PROXIMA_FECHA_DE_CITA DATE,
PROXIMA_FECHA_DE_REVISION DATE,
Fecha DATE,
Detalles_Progreso VARCHAR (200));


DROP Table progreso

CREATE TABLE consultar(
NOMBRE_DEL_PACIENTE VARCHAR (40),
FECHA_DE_NACIMIENTO DATE ,
DNI_DEL_PACIENTE INT (10),
IDENTIFICACION_MEDICA VARCHAR (20),
PROXIMA_FECHA_DE_CITA DATE ,
PROXIMA_FECHA_REVISION DATE,
Fecha DATE,
Detalles_Pogreso VARCHAR (300));

DROP TABLE consultar


CREATE TABLE index2(
    Ingrese_el_nombre VARCHAR (30),
    Ingrese_codigo INT (10));