<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Psr7\Uri;

$uri = new Uri('https://example.com/path?q=gateseeker');
echo $uri->getHost(), PHP_EOL;
