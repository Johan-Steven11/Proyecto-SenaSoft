<?php
function validarCampos(){
    $ok = false;
    $mensaje = " ";

if(isset($_POST['Iniciar'])){
    $cedula = $_POST['cedula'];
    $Nombre = $_POST['Nombre'];
    $Rol = $_POST['Seleccion'];


    if(empty(trim('cedula')) || empty(trim('Nombre')) || $Rol == "Seleccione su rol"){
        $ok = false;
        $mensaje = "Los campos son obligatorios";
        return $ok;
    }else{
        $ok = true;
        return $ok;
    }
}

}
