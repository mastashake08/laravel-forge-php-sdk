<?php

namespace Mastashake08\Forge;

require __DIR__.'/vendor/autoload.php';

Forge::setApiKey($apiKey);
echo Server::all();
