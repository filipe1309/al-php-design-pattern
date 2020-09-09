<?php

namespace Alura\DesignPattern\NotaFiscal;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;
    
    public function valor(): float
    {
        return array_reduce($this->itens, fn ($valorAcumulado, $itemAtual) => $valorAcumulado + $itemAtual->valor, 0);
    }
}