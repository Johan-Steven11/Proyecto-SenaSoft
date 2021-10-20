<?php

include("/xampp/htdocs/Proyecto-SenaSoft/inc/servidor/parametros.php");

class cadenas {

    private $cadenaconexion;
    private $usuariobd = USUARIO_BD;
    private $contrasenabd = CONTRASENA_BD;
    
    

    public function generarCadena(){
        return $this->cadenaconexion = "mysql:host=" . NOMBRE_SERVIDOR . ";dbname=" . NOMBRE_BD . ";port=" . PUERTO_BD . ";charset=" . CHARSET;
    }

    

    public function usuario(){
        return $this->usuariobd;
    }

    public function contrasena(){
        return $this->contrasenabd;
    }

    

    


}

?>