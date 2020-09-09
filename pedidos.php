<?php
//$ php pedidos.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ Orcamento };
use Alura\DesignPattern\Pedido\{ CriadorDePedido };

$pedidos = [];
$criadorDePedido = new CriadorDePedido();

for ($i=0; $i < 10000; $i++) { 
    $orcamento = new Orcamento();
    $pedido = $criadorDePedido->criarPedido('Bob Dylan', date('Y-m-d'), $orcamento);
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() / 1024 / 1024; // Bytes / KiloBytes / MegaBytes 7.2 -> 3.9 (com $hoje) -> 3.1 (Flyweight)
