<?php

use Alura\DesignPattern\NotaFiscal\{ ConstrutorNotaFiscal };
use Alura\DesignPattern\{ ItemOrcamento };

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscal();
$builder->paraEmpresa('123456', 'Bob Dylan Corp');
$builder->comItem(new ItemOrcamento());
$builder->comItem(new ItemOrcamento());
$builder->comItem(new ItemOrcamento());
$builder->comItem(new ItemOrcamento());
$builder->comObservacoes('Esta nota fiscal foi construida com um construtor');

$notaFiscal = $builder->constroi();

var_dump($notaFiscal);
