<?php
//$ php registro-orcamentos.php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{ RegistroOrcamento, Orcamento };
use Alura\DesignPattern\Http\{ CurlHttpAdapter, ReactPHPHttpAdapter };

// $registroOrcamento = new RegistroOrcament(new CurlHttpAdapter());
$registroOrcamento = new RegistroOrcament(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());