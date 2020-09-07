<?php
//$ php zip.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ Orcamento };
use Alura\DesignPattern\Relatorio\{ OrcamentoZip };

$orcamentoZip = new OrcamentoZip();
$orcamento = new Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);