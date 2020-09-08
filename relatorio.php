<?php
//$ php zip.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ Orcamento, Pedido };
use Alura\DesignPattern\Relatorio\{ OrcamentoExportado, PedidoExportado };
use Alura\DesignPattern\Relatorio\{ ArquivoXmlExportado, ArquivoZipExportado };

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeDeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$arquivoExportado = new ArquivoXmlExportado('orcamento');
// $arquivoExportado = new ArquivoZipExportado('orcamento.array'); // OK

echo $arquivoExportado->salvar($orcamentoExportado);

// $pedido = new Pedido();
// $pedido->nomeCliente = 'Bob Dylan';
// $pedido->dataFinalizacao = new DateTimeImmutable;

// $pedidoExportado = new PedidoExportado($pedido);
// $arquivoExportado = new ArquivoXmlExportado('pedido'); // OK
// //  $arquivoExportado = new ArquivoZipExportado('pedido.array'); // OK


// echo $arquivoExportado->salvar($pedidoExportado);