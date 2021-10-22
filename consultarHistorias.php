<?php
require ('./inc/header.php');
// include './inc/historiaRegistro.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./css/lista.css">
    <title>Document</title>
</head>
<body>
    <?php include"./inc/listaHistorias.php";?>
    <script src="./bootstrap-js/bootstrap.bundle.min.js"></script>
    <script src="./js/empujar.js"></script>
    <script src="./js/peticiones.js"></script>
    <script src="./js/eventosListaHistorias.js"></script>
</body>
</html>