<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icms extends Imposto
{
    public function relalizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}