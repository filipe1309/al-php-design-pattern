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

sleep(2);

// $notaFiscal2 = $notaFiscal->clonar();
$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();

echo count($notaFiscal->itens) . ', ' . $notaFiscal->dataEmissao->format('Y-m-d H:i:s') . PHP_EOL;
echo count($notaFiscal2->itens) . ', ' . $notaFiscal2->dataEmissao->format('Y-m-d H:i:s') . PHP_EOL;
