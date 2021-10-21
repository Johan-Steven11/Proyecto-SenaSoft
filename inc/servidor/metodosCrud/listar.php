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
             <td>' . $fila["imagen_historia"] . '</td>
        </tr>
    </table>';
}

?>

