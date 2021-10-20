<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importando bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- importando css -->
    <link rel="stylesheet" href="./CSS/formulario-registro.css">
    <title>Document</title>
</head>

<body class="container" id="formulario-contenedor">
    <legend id="formulario-historia" class="container-fluid">
        <form action="" class="form-input" id="registro" method="post">
            <div class="container d-flex flex-column" id="cuadros-contenedor">
                <label for="id"></label>
                <input type="hidden" class="cuadro-texto">
                <label for="primernombre">Primer Nombre</label>
                <input type="text" class="cuadro-texto" value="">
                <label for="segundonombre">Segundo Nombre</label>
                <input type="text" class="cuadro-texto">
                <label for="primerapellido">Primer Apellido</label>
                <input type="text" class="cuadro-texto">
                <label for="segundoapellido">Segundo Apellido</label>
                <input type="text" class="cuadro-texto">
                <label for="edad">Edad</label>
                <input type="text" class="cuadro-texto">
                <label for="ocupacion">Ocupacion</label>
                <input type="text" class="cuadro-texto">
                <label for="fechanacimiento">Fecha de nacimiento</label>
                <input type="text" class="cuadro-texto">
                <label for="estadocivil">Estado Civil</label>
                <input type="text" class="cuadro-texto">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" class="cuadro-texto">
                <label for="residencia">Residencia</label>
                <input type="text" class="cuadro-texto">
                <label for="escolaridad">Escolaridad</label>
                <input type="text" class="cuadro-texto">
                <label for="escolaridad">Escolaridad</label>
                <input type="date" class="cuadro-texto">
                </br>
                <div class="d-flex" id="botones">
                    <button type="submit" id="guardar">Guardar Informacion</button>
                    <button type="button" id="documento">Registrar Documento</button>
                </div>

            </div>
        </form>
    </legend>
</body>

</html>