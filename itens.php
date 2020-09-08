<?php
//$ php itens.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ Orcamento, ItemOrcamento };

$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

echo $orcamento->valor();