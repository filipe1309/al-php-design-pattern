<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\{ Icms, Iss };

require 'vendor/autoload.php';

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms());
echo $calculadora->calcula($orcamento, new Iss());
*/

// $calculadora = new CalculadoraDeDescontos();

// $orcamento = new Orcamento();
// $orcamento->valor = 600;
// // $orcamento->quantidadeDeItens = 7; // 20
// $orcamento->quantidadeDeItens = 5; // 0

// echo $calculadora->calculaDescontos($orcamento);

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Iss());
echo $calculadora->calcula($orcamento, new Icms());
// echo $calculadora->calcula($orcamento, new Iss(new Icms()));