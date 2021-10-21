<?php

require("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/conexion/cadenas.php");
require("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/parametros.php");

class DAM{
    private $peticion;
    private $db;
    private $cadena;
    private $parametros;
    private $usuario;
    private $contrasena;
    
    
    
    public function __construct()
    {
        
    }

    private function generarConexion(){
        try {
            $sentencias=$this->db = new cadenas();
            
            $this->parametros = $sentencias->generarCadena();
            $this->usuario = $sentencias->usuario();
            $this->contrasena = $sentencias->contrasena();
            $conexion = new PDO($this->parametros,$this->usuario,$this->contrasena);
            return $conexion;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    private function listarDatos(){
        $this->cadena = "SELECT * FROM registrodatos";
        
        $metodos = new tratarDatos();

        $preparado=$this->generarConexion()->prepare($this->cadena);
        $resultado=$metodos->ejecutarSentencia($preparado);

        $data=$preparado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function traerDatos(){
        return $this->listarDatos();
    }
    

}
