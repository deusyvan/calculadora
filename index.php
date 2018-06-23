<?php

class Calculadora {
    
    public function somar($n1, $n2){
        return $n1 + $n2;
    }
    
    public function subtrair($n1, $n2){
        return $n1 - $n2;
    }
    
    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
    
    public function dividir($n1, $n2){
        return $n1 / $n2;
    }
}


    $calc = new Calculadora();

    echo "2 + 10 = ".$calc->somar(2, 10)."<br/>";
    echo "20 - 16 = ".$calc->subtrair(20, 16)."<br/>";
    echo "9 * 12 = ".$calc->multiplicar(9, 12)."<br/>";
    echo "12 / 2 = ".$calc->dividir(12, 2)."<br/>";
    
    
    
    
    