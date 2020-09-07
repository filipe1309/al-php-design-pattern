<?php

namespace Alura\DesignPattern\Https;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;

}