<?php

namespace Mastashake08\Forge;

class Credential
{
    use InteractsWithAPI;

    public $_url = 'https://forge.laravel.com/api/v1/credentials';

    public function all()
    {
        return $this->sendRequest('GET', self::$_url);
    }
}
