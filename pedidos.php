<?php
//$ php pedidos.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ Orcamento, Pedido };

$pedidos = [];
$hoje= new \DateTimeImmutable();

for ($i=0; $i < 10000; $i++) { 
    $pedido = new Pedido();
    $pedido->nomeCliente = md5((string) rand(1, 100000));
    $pedido->orcamento = new Orcamento();
    $pedido->dataFinalizacao = $hoje;

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() / 1024 / 1024; // Bytes / KiloBytes / MegaBytes 7.2 -> 3.9 (com $hoje) -> 
