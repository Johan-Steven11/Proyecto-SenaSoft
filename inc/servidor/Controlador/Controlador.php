<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "med";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}
if (isset($_POST['Iniciar'])) {

    $rol = $_POST['Seleccion'];
    $cedula = $_POST["cedula"];
    $nombre = $_POST["Nombre"];
    $contraseña = $_POST['Contraseña'];
    if (empty(trim($nombre)) || empty(trim($cedula)) || $rol == "selecion") {
        echo "<script> alert('Todos los campos deben ser diligenciados');</script>";
    }
    if ($rol == "Doctor") {
        $res = $conn->query("SELECT * FROM `doctores` WHERE `Codigo` = '$cedula' and `Nombre` = '$nombre' and `Contraseña` = '$contraseña' ");
        $nr = mysqli_num_rows($res);

        if ($nr == 1) {
            echo "<script>window.location= 'Historias.php'</script>";
        } else if ($nr == 0) {

            echo "<script> alert('Usuario no existe');window.location= 'Index.php' </script>";
        }
    } else if ($rol == "Paciente") {
       
        $res = $conn->query("SELECT * FROM `registrodatos` WHERE `cedula` = '$cedula' and `primer_nombre` = '$nombre'");
        $nr = mysqli_num_rows($res);

        if ($nr == 1) {
            echo "<script>window.location= 'Home.php'</script>";
        } else if ($nr == 0) {

            echo "<script> alert('Usuario no existe');window.location= 'Index.php' </script>";
        }
    }
}
