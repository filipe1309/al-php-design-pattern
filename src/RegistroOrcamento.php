<?php

namespace Alura\DesignPattern;

class RegistroOrcamento
{
    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orcamentos finalizados podem ser registrados na API');
        }
        $curl = curl_init('http://api.registrar.orcamento');
        curl_setopt($curl, CURLOPT_POST, [
            'valor' => $orcamento->valor, 
            'quantidadeDeItens' => $orcamento->quantidadeDeItens, 
        ]);
        curl_exec($curl);
    }
}
