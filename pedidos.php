<?php
//$ php pedidos.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ Orcamento, Pedido, TemplatePedido };

$pedidos = [];
$template = new TemplatePedido(md5('a'), new \DateTimeImmutable());

for ($i=0; $i < 10000; $i++) { 
    $pedido = new Pedido();
    $pedido->template = $template;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() / 1024 / 1024; // Bytes / KiloBytes / MegaBytes 7.2 -> 3.9 (com $hoje) -> 3.1 (Flyweight)
