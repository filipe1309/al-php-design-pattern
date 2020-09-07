<?php
//$ php registro-orcamentos.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ RegistroOrcamento, Orcamento };
use Alura\DesignPattern\Http\{ CurlHttpAdapter };

$registroOrcamento = new RegistroOrcament(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());