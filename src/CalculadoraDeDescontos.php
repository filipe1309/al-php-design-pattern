<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        /*$descontoMaisDe5Itens = new DescontoMaisDe5Itens();
        $desconto = $descontoMaisDe5Itens->calculaDesconto($orcamento);
        if ($desconto === 0) {
            $descontoMaisDe500Reais = new DescontoMaisDe500Reais();
            $desconto = $descontoMaisDe500Reais->calculaDesconto($orcamento);
        }
        return $desconto;
        */

        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}