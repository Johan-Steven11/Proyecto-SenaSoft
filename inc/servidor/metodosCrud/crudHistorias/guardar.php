<?php

include("../../../servidor/conexion/datos.php");
$db = new DAM();

echo json_encode($db->guardarH());

?>