<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\{ CriarPedidoNoBanco, LogGerarPedido, EnviarPedidoPorEmail };

class GerarPedidoHandler
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    //$ php gera-pedido.php 1200.50 7 Filipe
    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeDeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;
        
        $pedidosRepository = new CriarPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();

        $pedidosRepository->executaAcao($pedido);
        $logGerarPedido->executaAcao($pedido);
        $enviarPedidoPorEmail->executaAcao($pedido);
    }
}