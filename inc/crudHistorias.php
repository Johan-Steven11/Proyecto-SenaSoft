<?php

include("./servidor/datos.php");

$db = new DAM();

echo $db->conectar();

?>