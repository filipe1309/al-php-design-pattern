<?php
//$ php gera-pedido.php 1200.50 7 Filipe

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedido, GerarPedidoHandler};
use Alura\DesignPattern\AcoesAoGerarPedido\{ CriarPedidoNoBanco, LogGerarPedido, EnviarPedidoPorEmail };

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);