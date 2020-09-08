<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto
{
    public function relalizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if ($this->deveAplicarATaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarATaxaMaxima(Orcamento $orcamento): bool;

    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;
    
    abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;
}