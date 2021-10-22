 <?php
include './inc/servidor/Controlador/Controlador.php'
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/EstilosLoguin.css">
</head>

<body>
    <nav>
        <button class="Regreso" onclick="cambio()">
            Registrarme
        </button>
    </nav>

    <form class="form" method="post" action="">
        <h2>Login</h2>
        <p type="Cedula: "><input placeholder="Ingrese su Cedula" name="cedula"></input>
        </p>
        <p type="Nombre: "><input placeholder="Ingrese su Nombre " name = "Nombre"></input>
        </p>
        <p type="Contraseña: "><input type="password" placeholder="Contraseña" name = "Contraseña"></input>
        </p>
        <p type="Rol: "><select name="Seleccion" id="select" class="select">
            <option value="selecion" name = "selecion">Seleccione su rol</option>
            <option value="Doctor" name = "Doctor">Doctor</option>
            <option value="Paciente" name = "Paciente">Paciente</option>
        </select>
        </p>
        <button class="Iniciar" name="Iniciar" value="Iniciar" >Iniciar Sesion</button>
    </form>
    <script src="./js/empujar.js"></script>
</body>


<!-- <script src="/bootstrap-js/bootstrap.min.js "></script> -->

</html>