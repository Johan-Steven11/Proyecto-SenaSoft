<?php

require("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/cadenas.php");


class DAM{
    private $db;
    
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
            echo "conexion exitosa";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function conectar(){
        echo $this->generarConexion();
    }

    

}
