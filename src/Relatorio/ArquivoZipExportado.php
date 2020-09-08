<?php

namespace Alura\DesignPattern\Relatorio;
use \ZipArchive;

class ArquivoZipExportado implements ArquivoExportado
{
    private string $nomeArquivoInterno;
    
    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        //C:\Users\filip\AppData\Local\Temp
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip = new ZipArchive();
        $arquivoZip->open($caminhoArquivo, ZipArchive::CREATE);
        $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}