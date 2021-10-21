<?php

class tratarDatos{

    public function prepararSentencia($conexion,$sentencia){
        return $conexion->prepare($sentencia);
    }

    public function tipoDato($sentenciapreparada,$valor,$variable,$tipo){
        return $sentenciapreparada->bindParam($valor,$variable,$tipo);
    }

    public function ejecutarSentencia($sentenciapreparada){
        return $sentenciapreparada->execute();
    }

    
    
}

?>