<?php

class Racional {

    private $num;
    private $den;

    /**
     * Racional constructor.
     * @param null $num
     * @param null $den
     * @source construimos un objeto del tipo num/den sobrecargándolo como se muestra
      *  //opciones new Racional () =>1/1
         //opciones new Racional (5) =>5/1
         //opciones new Racional (5,2) =>5/2
         //opciones new Racional ("5/2") =>5/2
         //opciones new Racional ("5") =>5/1
     */
    public function __construct($num=null, $den=null) {

    }

    /**
     * @param Racional $op1
     * @return Racional Resultado de sumar al racional acutal el Racional que recibo como parámetro
     */
    public function sumar(Racional $op1):Racional {
        //Escribe el código correspondiente
    }

    /**
     * @param Racional $op1
     * @return Racional Resultado de restar al racional acutal el Racional que recibo como parámetro
     */
    public function restar(Racional $op1) {
        //Escribe el código correspondiente
    }

    /**
     * @param Racional $op1
     * @return Racional Resultado de multiplicar al racional acutal el Racional que recibo como parámetro
     */
    public function multiplicar(Racional $op1) {
        //Escribe el código correspondiente
    }

    /**    /**
     * @param Racional $op1
     * @return Racional Resultado de dividir al racional acutal el Racional que recibo como parámetro
     */
    public function dividir(Racional $op1) {
        //Escribe el código correspondiente
    }

    public function __toString() {
        return ($this->num . "/" . $this->den);
    }


    /**
     * este método obtiene un racional simplificado del actual
     * @return Racional
     * @source simplifica el Racional actual, retornando otro objeto Racional con esos valores como num y den
     * importante: no modifica el Racional actual
     */
    public function simplificar()
    {
        $mcd = $this->mcd();
        return new Raciona ($this->num/$mcd, $this->den/$ºmcd)
    }

    private function mcd (){
//Implementa el método para obtener el mcd de $this->num y $this->den

    }
}
