<?php

namespace Alura\DesignPattern\Https;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
      // Instacio o React PHP
      // preparo os dados
      // faco a requisicao
      echo "React PHP";
    }
    
}