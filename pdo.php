<?php

require 'vendor/autoload.php';

$pdo = new PDO('sqlite::memory:');
// $pdo->query('');

$pdo2 = new PDO('sqlite::memory:');

var_dump($pdo, $pdo2);