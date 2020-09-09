<?php

use Alura\DesignPattern\NotaFiscal\{ ConstrutorNotaFiscalServico, ConstrutorNotaFiscalProduto };
use Alura\DesignPattern\{ ItemOrcamento };

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalProduto();
// $builder = new ConstrutorNotaFiscalServico();
$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 1500;
$item3 = new ItemOrcamento();
$item3->valor = 1000;

$notaFiscal = $builder->paraEmpresa('123456', 'Bob Dylan Corp')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Esta nota fiscal foi construida com um construtor')
    ->constroi();

echo $notaFiscal->valor() . PHP_EOL;
echo $notaFiscal->valorImpostos;
