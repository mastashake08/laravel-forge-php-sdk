<?php
namespace Mastashake08\Forge;
require __DIR__ . '/vendor/autoload.php';
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\Server;
use Mastashake08\Forge\Credential;
use Mastashake08\Forge\Site;
use Mastashake08\Forge\Wordpress;
Forge::setApiKey($apiKey);
echo Server::all();
?>
