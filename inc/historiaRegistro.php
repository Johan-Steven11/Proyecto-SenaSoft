<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importando bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <!-- importando css -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../css/formulario-registro.css">
    <title>Registro</title>
</head>

<body>
    <div class="container" id="formulario-contenedor">
        <legend id="formulario-historia" class="">
            <form action="" class="form-input" id="registro" method="post">
                <h2 class="text-center tamano">Ingresa el paciente</h2>
                <div class="container d-flex flex-column" id="cuadros-contenedor">
                    <label for="id"></label>
                    <input type="hidden" id="id" name="id" class="cuadro-texto">
                    <label for="cedula">Cedula</label>
                    <input type="text" id="cedula" name="id" class="cuadro-texto" id="cedula" name="cedula">
                    <label for="primernombre">Primer Nombre</label>
                    <input type="text" name="primernombre" id="primernombre" class="cuadro-texto" value="">
                    <label for="segundonombre">Segundo Nombre</label>
                    <input type="text" name="segundonombre" id="segundonombre" class="cuadro-texto">
                    <label for="primerapellido">Primer Apellido</label>
                    <input type="text" name="primerapellido" id="primerapellido" class="cuadro-texto">
                    <label for="segundoapellido">Segundo Apellido</label>
                    <input type="text" name="segundoapellido" id="segundoapellido" class="cuadro-texto">
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad" class="cuadro-texto">
                    <label for="ocupacion">Ocupacion</label>
                    <input type="text" name="ocupacion" id="ocupacion" class="cuadro-texto">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" id="correo" class="cuadro-texto">
                    <label for="fechanacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fechanacimiento" id="fechanacimiento" class="cuadro-texto">
                    <label for="estadocivil">Estado Civil</label>
                    <input type="text" name="estadocivil" id="estadocivil" class="cuadro-texto">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" name="nacionalidad" id="nacionalidad" class="cuadro-texto">
                    <label for="residencia">Residencia</label>
                    <input type="text" name="residencia" id="residencia" class="cuadro-texto">
                    <label for="escolaridad">Escolaridad</label>
                    <input type="text" name="escolaridad" id="escolaridad" class="cuadro-texto">
                    <label for="imagen">Selecciona la imagen a subir:</label>
                    <input type="file" name="imagen" id="imagen" class="archivo">

                    </br>

                    <button type="submit" id="guardar">Guardar Informacion</button>


                </div>
            </form>
        </legend>
    </div>

    <script src="../bootstrap-js/bootstrap.bundle.min.js"></script>
    <script src="../js/empujar.js"></script>
</body>

</html>