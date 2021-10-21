<?php

require("cadenas.php");
require("parametros.php");



class DAM
{
    private $peticion;
    private $db;
    private $cadena;
    private $parametros;
    private $usuario;
    private $contrasena;
    private $datos;
    private $img;


    public function __construct()
    {
    }

    private function generarConexion()
    {
        try {
            $sentencias = $this->db = new cadenas();

            $this->parametros = $sentencias->generarCadena();
            $this->usuario = $sentencias->usuario();
            $this->contrasena = $sentencias->contrasena();
            $conexion = new PDO($this->parametros, $this->usuario, $this->contrasena);
            return $conexion;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    private function listarDatos()
    {
        //instancio clase que contiene mis sentencias de guardado
        $sentencias = new cadenas();
        //instancio mi clase que contiene los metodos PDO que mas uso
        $metodos = new tratarDatos();

        $this->cadena = $sentencias->listarHistorias();

        $preparado = $metodos->prepararSentencia($this->generarConexion(), $this->cadena);
        $resultado = $metodos->ejecutarSentencia($preparado);

        $data = $preparado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    private function guardarHistoria()
    {
        //instancio clase que contiene mis sentencias de guardado
        $sentencias = new cadenas();
        //instancio mi clase que contiene los metodos PDO que mas uso
        $metodos = new tratarDatos();
        //traemos los datos insertados en el form
        $this->datos = $_POST;

        // se llama el archivo que viene por ese metodo
        $this->img = $_FILES;

        if (isset($this->img['imagen'])) {
            //lo que se necesita de la imagen
            $temporal = $this->img['imagen']['tmp_name'];
            $imagen = $this->img['imagen']['name'];

            //generamos la ruta de la imagen
            $ruta = "/Proyecto-SenaSoft/inc/servidor/conexion/imagenes/" . $imagen;
            //movemos temporalmente la imagen a nuestro repo, para luego pasarlo a la BD
            if (move_uploaded_file($temporal, $ruta) == true) {
                echo "Successfully uploaded";
            }else{
                echo"no hay imagen que mostrar";
            }

            //declaramos la sentencia
            $this->cadena = "INSERT INTO registrodatos(id_Paciente,cedula,primer_nombre,segundo_nombre,primer_apellido,
        segundo_apellido,edad,ocupacion,correo,fecha_nacimiento,estado_civil,
        nacionalidad,residencia,escolaridad,imagen_historia) VALUES(:id,:ced,:p_n,:s_n,:p_a,:s_a,:edad,:oc,:corr,:f_n,:est_c,:nac,:res,:esc,:urlImagen)";

            $id = $this->datos["id"];
            $cedula = $this->datos["cedula"];
            $primernombre = $this->datos["primernombre"];
            $segundonombre = $this->datos["segundonombre"];
            $primerapellido = $this->datos["primerapellido"];
            $segundoapellido = $this->datos["segundoapellido"];
            $edad = $this->datos["edad"];
            $ocupacion = $this->datos["ocupacion"];
            $correo = $this->datos["correo"];
            $fechanacimiento = $this->datos["fechanacimiento"];
            $estadocivil = $this->datos["estadocivil"];
            $nacionalidad = $this->datos["nacionalidad"];
            $residencia = $this->datos["residencia"];
            $escolaridad = $this->datos["escolaridad"];
            

            $preparado = $metodos->prepararSentencia($this->generarConexion(), $this->cadena);

            $metodos->tipoDato($preparado, ':id', $id, PDO::PARAM_INT);
            $metodos->tipoDato($preparado, ':ced', $cedula, PDO::PARAM_INT);
            $metodos->tipoDato($preparado, ':p_n', $primernombre, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':s_n', $segundonombre, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':p_a', $primerapellido, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':s_a', $segundoapellido, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':edad', $edad, PDO::PARAM_INT);
            $metodos->tipoDato($preparado, ':oc', $ocupacion, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':corr', $correo, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':f_n', $fechanacimiento, PDO::PARAM_STR_CHAR);
            $metodos->tipoDato($preparado, ':est_c', $estadocivil, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':nac', $nacionalidad, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':res', $residencia, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':esc', $escolaridad, PDO::PARAM_STR);
            $metodos->tipoDato($preparado, ':urlImagen', $ruta, PDO::PARAM_STR_CHAR);

            $resultado = $metodos->ejecutarSentencia($preparado);

            if ($resultado == true) {
                echo "Guardado exitosamente";
            } else {
                echo "Error al guardar el dato";
            }
            return true;
        }else{
            echo "no puedes dejar la imagen vacia";
            return false;
        }
    }

    private function cargarImagenes()
    {
        // se llama el archivo que viene por ese metodo
        $this->img = $_FILES;
    }


    public function traerDatos()
    {
        return $this->listarDatos();
    }

    public function guardarH()
    {
        return $this->guardarHistoria();
    }
}
