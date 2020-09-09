<?php

use Alura\DesignPattern\NotaFiscal\{ ConstrutorNotaFiscal };
use Alura\DesignPattern\{ ItemOrcamento };

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscal();
$notaFiscal = $builder->paraEmpresa('123456', 'Bob Dylan Corp')
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comObservacoes('Esta nota fiscal foi construida com um construtor')
    ->constroi();

var_dump($notaFiscal);
