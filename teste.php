<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;

require 'vendor/autoload.php';

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms());
echo $calculadora->calcula($orcamento, new Iss());
*/

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 200;
// $orcamento->quantidadeDeItens = 7; // 20
$orcamento->quantidadeDeItens = 5; // 0

echo $calculadora->calculaDescontos($orcamento);

