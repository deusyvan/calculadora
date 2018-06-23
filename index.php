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

    $calc->definirNumeroInicial(10);
    $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
    $resultado = $calc->resultado();
    
    
?>
    
    