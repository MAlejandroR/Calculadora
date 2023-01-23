<?php

/**
 * Description of OperacionRacional
 *
 * @author manuel
 */
class OperacionRacional extends Operacion {

    public function __construct($operacion) {

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
        $resultado = parent::__toString();
        $resultado.= $this->opera();
        return $resultado;

    }

    /**
     * @return string retornará la información de toda la operación
     * En el ejemplo de ejecución lo puedes ver en forma de tabla después de ejecutarla
     */
    public function describe() {
        $operacion = parent::describe();
        //Agrega la informacion de describe para este caso
        return $operacion;
    }

}
