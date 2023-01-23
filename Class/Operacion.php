<?php

abstract class Operacion {


    protected $op1;
    protected $op2;
    protected $operador;
    const RACIONAL = 1;
    const REAL = 2;
    const ERROR = -1;

    public static function tipoOperacion($operacion) {
        self::$tipo = Operacion::ERROR;


        /**
         * inserta aquí el código, para que en función del valor de la operación
         * Nos retorno el valor REAL, RACIONAL o ERROR según sea el tipo de operación
         * Analizalo como una expresión regular
         *
         *
         */
        /*Con la intención de ayudar aporto algunas
        expresiones regulares que puedes usar*/
        $numReal = '[0-9]+(\.[0-9]*)?';
        $numEntero = '[0-9]+';
        $op = '[\+|\-|\*|\/]';
        $numRacional = '[0-9]+\/[1-9][0-9]*';

        //De esta forma,  podemos decir cuándo tendríamos una expresión real

        $real = "/^$numReal$op$numReal$/";
        if (preg_match($real, $operacion))
            self::$tipo= Operacion::REAL;


        //Continúa poniendo aquí el código para evaluar todas las expresiones que faltan



        return self::$tipo;




        //if (ereg("\[09][+-*/][09]\\", $operacion))
        //    return self::REAL;
        // else
        // */
    }

    public function __construct($operacion) {


        $this->operador = $this->obtenerOperador($operacion);
        //Asigna valores a estos atributos.
        $this->op1 ;
        $this->op2 ;
    }


    /*
     * Este método os lo paso implementado
     * */
    private function obtenerOperador($operacion) {
        if (strpos($operacion ,'+')!==false)
            return '+';
        if (strpos($operacion ,'-')!==false)
            return '-';
        if (strpos($operacion ,'*')!==false)
            return '*';
        if (strpos($operacion ,':')!==false)
            return ':';
        if (strpos($operacion ,'/')!==false)
            return '/';
    }

    public function getOp1() {
        return $this->op1;
    }

    public function getOp2() {
        return $this->op2;
    }

    public function getOperador() {
        return $this->operador;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function __toString() {
        return "<br />$this->op1$this->operador$this->op2 = ";
    }

    public function describe() {
        $operacion = "<table border=1><tr><th>Concepto</th> <th>Valores</th></tr>";
        $operacion .= "<tr><td>Operando 1</td><td>$this->op1</td></tr>";
        $operacion.="<tr><td>Operando 2</td><td>$this->op2</td></tr>";
        $operacion.="<tr><td>Operación</td><td>$this->operador</td></tr>";
        if (self::$tipo == Operacion::RACIONAL)
            $tipo = "Racional";
        else
            $tipo = "Real";
        $operacion.="<tr><td>Tipo de operacion</td><td>$tipo</td></tr>";
        return $operacion;
    }

    abstract public function opera();
}
