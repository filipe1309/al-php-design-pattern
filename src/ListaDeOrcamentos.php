<?php

namespace Alura\DesignPattern;
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
}