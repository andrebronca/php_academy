<?php

class Point {

    //criando automaticamente as proriedades
    //na declaração de parâmetros do construtor

    public function __construct(
        protected int $x,
        protected int $y = 0
    )
    {
        
    }

    //método destrutor
    function __destruct()
    {
        print "Destroying ". __CLASS__ ."\n";
    }

    //unset() é considerado mais prático para limpar cache
}