<?php

namespace Alura\DesignPattern\Log;

class StdoutLogWritter implements LogWritter
{
    public function escreve(string $mensagemFormatada): void {
        fwrite(STDOUT, $mensagemFormatada);
        // echo $mensagemFormatada;
    }
}