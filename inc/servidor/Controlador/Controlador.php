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

    $rolD = $_POST['Seleccion'];
    $cedula = $_POST["cedula"];
    $nombre = $_POST["Nombre"];
    $contraseña = $_POST['Contraseña'];
    if (empty(trim($nombre)) || empty(trim($cedula)) || $rolD == "selecion" || empty(trim($contraseña))) {
        echo "<script> alert('Todos los campos deben ser diligenciados');</script>";
    }
    if ($rolD == "Doctor") {
        $res = $conn->query("SELECT * FROM `doctores` WHERE `Codigo` = '$cedula' and `Nombre` = '$nombre' and `Contraseña` = '$contraseña' and `Rol` = '$rolD' ");
        $nr = mysqli_num_rows($res);

        if ($nr == 1) {
            echo "<script>window.location= 'Historias.php'</script>";
        } else if ($nr == 0) {

            echo "<script> alert('Usuario no existe');window.location= 'Index.php' </script>";
        }
    } else if ($rolD == "Paciente") {
        $res = $conn->query("SELECT * FROM `doctores` WHERE `Codigo` = '$cedula' and `Nombre` = '$nombre' and `Contraseña` = '$contraseña'  and `Rol` = '$rolD' ");
        // $res = $conn->query("SELECT * FROM `registrodatos` WHERE `cedula` = '$cedula' and `primer_nombre` = '$nombre'");
        $nr = mysqli_num_rows($res);

        if ($nr == 1) {
            echo "<script>window.location= 'Home.php'</script>";
        } else if ($nr == 0) {

            echo "<script> alert('Usuario no existe');window.location= 'Index.php' </script>";
        }
    }
}
if (isset($_POST['Registrar'])){
    $error = 0;
    $rolD = $_POST['Seleccion'];
    $cedula = $_POST["cedula"];
    $nombre = $_POST["Nombre"];
    $contraseña = $_POST['Contraseña'];
    if (empty(trim($nombre))  || $rolD == "selecion" || empty(trim($contraseña)) || empty(trim($cedula))) {
        echo "<script> alert('Todos los campos deben ser diligenciados');</script>";
    }
    if($error == "0"){
        $res = $conn->query("INSERT INTO `doctores` VALUES('$cedula','$nombre','$contraseña','$rolD')");

    }
    if($res == 1){
        echo "<script> alert('Se registro un nuevo usuario');</script>";
    }else{
        echo "<script> alert('No se pudo registrar intente mas tarde ');</script>";
    }
}
