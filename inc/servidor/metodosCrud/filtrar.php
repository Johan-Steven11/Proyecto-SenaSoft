<?php

include("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/conexion/datos.php");

$data = new DAM;
$query = "SELECT * FROM expenses ORDER BY fecha";
if (isset($_POST['consulta']))


$query="SELECT primer_nombre, primer_apellido, fecha FROM expenses
WHERE primer_nombre LIKE '%".$q."%' OR primer_apellido LIKE '%".$q."%'"






?>