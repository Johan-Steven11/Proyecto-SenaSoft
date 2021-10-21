<?php


class cadenas {
    private $nombre_serv="localhost";
    private $nombre_bd="med";
    private $usuario ="root";
    private $contrasena="";
    private $puerto = "3306";
    private $charset ="utf8";

    private $cadenaconexion;
    
    
    

    public function generarCadena(){
        return $this->cadenaconexion = "mysql:host=" . $this->nombre_serv . ";dbname=" . $this->nombre_bd . ";port=" . $this->puerto . ";charset=" . $this->charset;
    }

    

    public function usuario(){
        return $this->usuario;
    }

    public function contrasena(){
        return $this->contrasena;
    }

    

    


}

?>