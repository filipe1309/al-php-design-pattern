<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoXmlExportado implements ArquivoExportado
{
    private string $nomeDoElmentoPai;

    public function __construct(string $nomeDoElmentoPai)
    {
        $this->nomeDoElmentoPai = $nomeDoElmentoPai;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeDoElmentoPai} />");
        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}