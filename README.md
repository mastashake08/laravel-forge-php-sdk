# Laravel Forge PHP SDK
An Unofficial PHP SDK for Laravel Forge API
Taylor Otwell has graciously given us a REST API for Laravel Forge. This simple
PHP SDK is a wrapper around that API to be used in your PHP projects

# Get A Key
The first thing you need to do before starting a project is register for an API token
at [https://forge.laravel.com/user/profile#/api]

#Download Project
composer require mastashake08/laravel-forge-php-sdk

#Use
Follow the conventions in the API documentation [https://forge.laravel.com/api-documentation], for example to list all servers
```php
use Mastashake08\Forge\Server;
use Mastashake08\Forge\Forge;
Forge::setApiKey($apiKey);
echo Server::all(); // shows all servers in JSON Format
```
#Contribution
This project is not yet complete, always welcome pull request to help finish functionality!

#Questions
Email all questions to jyrone.parker@gmail.com
