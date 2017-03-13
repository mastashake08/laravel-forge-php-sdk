<?php

namespace Mastashake08\Forge;

require __DIR__.'/vendor/autoload.php';
$apiKey = $argv[1];
Forge::setApiKey($apiKey);
$server = new Server();
echo $server->all();
