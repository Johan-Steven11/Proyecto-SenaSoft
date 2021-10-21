<?php

include("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/conexion/datos.php");

$data = new DAM;

foreach($data->traerDatos() as $fila){
    echo '<table class="table">
    
    <tr>
             <td>' . $fila["id_Paciente"] . '</td>
             <td>' . $fila["cedula"] . '</td>
             <td>' . $fila["primer_nombre"] . '</td>
             <td>' . $fila["segundo_nombre"] . '</td>
             <td>' . $fila["primer_apellido"] . '</td>
             <td>' . $fila["segundo_apellido"] . '</td>
             <td>' . $fila["edad"] . '</td>
             <td>' . $fila["ocupacion"] . '</td>
             <td>' . $fila["correo"] . '</td>
             <td>' . $fila["fecha_nacimiento"] . '</td>
             <td>' . $fila["estado_civil"] . '</td>
             <td>' . $fila["nacionalidad"] . '</td>
             <td>' . $fila["residencia"] . '</td>
             <td>' . $fila["escolaridad"] . '</td>
<<<<<<< HEAD:inc/servidor/metodosCrud/listar.php
             <td>' . $fila["imagen_historia"] . '</td>
             <td><a>editar</a></td>
             <td><a>descargar</a></td>
=======
             <td><img src = "'.$fila["imagen_historia"].'"</td>
>>>>>>> 4c7c7f32b89d0868ea99f633feaf414597ae0fc6:inc/servidor/metodosCrud/crudHistorias/listar.php
        </tr>
        <br>
    </table>';
}

?>

