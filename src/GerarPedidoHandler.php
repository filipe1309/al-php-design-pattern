<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeDeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;
        
        // PedidoRepository
        echo 'Cria pedido no banco de dados ' . PHP_EOL;
        // MailService
        echo 'Envia e-mail para o cliente ' . PHP_EOL;
        echo 'Gerar log de criacao de pedido ' . PHP_EOL;
    }
}