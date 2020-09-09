<?php

namespace Alura\DesignPattern\Log;

class FileLogManager extends LogManager
{
    private $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWritter(): LogWritter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}