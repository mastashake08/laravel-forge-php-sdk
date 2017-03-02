<?php
namespace Mastashake08\Forge;
require __DIR__ . '/vendor/autoload.php';
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\Server;
use Mastashake08\Forge\Credential;
Forge::setApiKey($apiKey='');
//echo Server::all();
//echo Server::retrieve(74809);
echo Credential::all();
?>
