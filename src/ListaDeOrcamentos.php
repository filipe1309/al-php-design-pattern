<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use IteratorAggregate;
use ArrayIterator;

class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter($this->orcamentos, fn ($orcamento) => $orcamento->estadoAtual instanceof Finalizado);

        /*
        // V2
        return array_filter($this->orcamentos, function($orcamento) {
            return get_class($orcamento->estadoAtual) === 'Alura\DesignPattern\EstadosOrcamento\Finalizado';
        });
        
        // V1
        $orcamentosFinalizados = [];
        foreach($this->orcamentos as $orcamento) {
            if (get_class($orcamento->estadoAtual) === 'Alura\DesignPattern\EstadosOrcamento\Finalizado') {
                $orcamentosFinalizados[] = $orcamento;
            }
        }

        return $orcamentosFinalizados;
        */
    }
}