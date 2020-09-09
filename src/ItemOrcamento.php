<?php

namespace Alura\DesignPattern;

class ItemOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        sleep(1); // Simula acesso a uma API externa
        return $this->valor;
    }
}