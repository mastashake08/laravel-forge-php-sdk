# Laravel Forge PHP SDK
An Unofficial PHP SDK for Laravel Forge API
Taylor Otwell has graciously given us a REST API for Laravel Forge. This simple
PHP SDK is a wrapper around that API to be used in your PHP projects

# Get A Key
The first thing you need to do before starting a project is register for an API token
at [the official website](https://forge.laravel.com/user/profile#/api)

#Download Project
composer require mastashake08/laravel-forge-php-sdk

#Usage
Follow the conventions in the [API documentation](https://forge.laravel.com/api-documentation) , for example to list all servers
```php
use Mastashake08\Forge\Server;
use Mastashake08\Forge\Forge;
Forge::setApiKey($apiKey);
echo Server::all(); // shows all servers in JSON Format
```
##Objects
The following objects are available via the SDK
* Certificate
* Config
* Credential
* Daemon
* Deployment
* Firewall
* Git
* Job
* Mysql
* MysqlUser
* Recipe
* Server
* Service
* Site
* SSH
* Wordpress
* Worker

#Contribution
This project is ongoing feel free to submit a pull request and help make this project better!

#Questions
Email all questions to jyrone.parker@gmail.com
