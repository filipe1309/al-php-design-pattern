<?php

use Alura\DesignPattern\Log\{ StdoutLogManager, FileLogManager };

require 'vendor/autoload.php';

// $logManager = new StdoutLogManager();
$logManager = new FileLogManager(__DIR__ . '/src/Log/log');
$logManager->log('info', 'testando log manager');