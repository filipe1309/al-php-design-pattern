<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Iss extends Imposto
{
    public function relalizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;    
    }
}