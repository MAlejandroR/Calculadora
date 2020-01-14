<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OperacionReal
 *
 * @author manuel
 */
class OperacionReal extends Operacion {

    public function __construct($operacion) {

    }

    public function opera() {


    }

    /**
     * @return string|void devolverá la cadena de caracteres de la expresión  que luego mostraré     *
     */
    public function __toString() {

    }

    /**
     * @return string retornará la información de toda la operación
     * En el ejemplo de ejecución lo puedes ver en forma de tabla después de ejecutarla
     */
    public function describe() {
        $tabla_rtdo = "<table border=1><tr><th>Cocepto</th> <th>Valores</th></tr>";

        //Escribe el resto de código para retornar la información necesaria

        return $tabla_rtdo;
    }


}
