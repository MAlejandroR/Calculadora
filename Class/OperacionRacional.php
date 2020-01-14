<?php

/**
 * Description of OperacionRacional
 *
 * @author manuel
 */
class OperacionRacional extends Operacion {

    public function __construct($operacion) {
        parent::__construct($operacion);
        $this->op1 = new Racional($this->op1);
        $this->op2 = new Racional($this->op2);
    }

    /**
     * Este método realiza el cálculo de una operación Racional
     */
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
