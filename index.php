<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new App\ComplexNumber(2, 3);

var_dump($app->add(1));