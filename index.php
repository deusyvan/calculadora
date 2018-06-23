<?php

class Calculadora {
    
    private $n;
    
    public function __construct($numeroInicial){
        $this->n = $numeroInicial;
    }
    
    public function somar ($n1){
        $this->n = $this->n + $n1;
    }
    
   
}

    $calc = new Calculadora(10);

    $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
    $resultado = $calc->resultado(); //22.5
    
    
    
    
?>
    
    