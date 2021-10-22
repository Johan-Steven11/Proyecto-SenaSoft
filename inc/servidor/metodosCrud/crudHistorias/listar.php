<?php

include("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/conexion/datos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>

<body>

    <?php

    function pintarImg($fila)
    {
        $imagen = base64_encode($fila["imagen_historia"]);

        echo $imagen;
    }

    function listarDatos()
    {
        echo '
        <thead>
            <tr>
                <th>ID</th>
                <th>CEDULA</th>
                <th>PRIMER NOMBRE</th>
                <th>SEGUNDO NOMBRE</th>
                <th>PRIMER APELLIDO</th>
                <th>SEGUNDO APELLIDO</th>
                <th>EDAD</th>
                <th>OCUPACION</th>
                <th>CORREO</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>ESTADO CIVIL</th>
                <th>NACIONALIDAD</th>
                <th>RESIDENCIA</th>
                <th>ESCOLARIDAD</th>
                <th>IMAGEN</th>
            </tr>
        </thead>';
        $data = new DAM;
        foreach ($data->traerDatos() as $row) {

            echo '
                <tr>
                <td>' . $row["id_Paciente"] . '</td>
                <td>' . $row["cedula"] . '</td>
                <td>' . $row["primer_nombre"] . '</td>
                <td>' . $row["segundo_nombre"] . '</td>
                <td>' . $row["primer_apellido"] . '</td>
                <td>' . $row["segundo_apellido"] . '</td>
                <td>' . $row["edad"] . '</td>
                <td>' . $row["ocupacion"] . '</td>
                <td>' . $row["correo"] . '</td>
                <td>' . $row["fecha_nacimiento"] . '</td>
                <td>' . $row["estado_civil"] . '</td>
                <td>' . $row["nacionalidad"] . '</td>
                <td>' . $row["residencia"] . '</td>
                <td>' . $row["escolaridad"] . '</td>'
    ?>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen_historia']); ?>" alt=""/></td>
    <?php
            echo '</tr>';
        }
    }
    listarDatos();
    ?>

</body>

</html>

<!-- foreach($data->traerDatos() as $fila){
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
<<<<<<< HEAD
             <td><img width="60px" height="60px" src = "'.$fila["imagen_historia"].'"/></td>
=======
             <td><div class="container">
             <img src = "'.$fila["imagen_historia"].'"/>
             </div></td>
>>>>>>> 3d9e3fff206866e0e1ff28bd512cfc75cf4c2410
        </tr>
        <br>
    </table>';
} -->

<?php

?>