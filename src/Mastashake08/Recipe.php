<?php

namespace Mastashake08\Forge;

class Recipe
{
    use InteractsWithAPI;

    public $_url = 'https://forge.laravel.com/api/v1/recipes';

    public function create($params)
    {
        return $this->sendRequest('POST', self::$_url, $params);
    }

    public function all()
    {
        return $this->sendRequest('GET', self::$_url);
    }

    public function retrieve($id)
    {
        return $this->sendRequest('GET', self::$_url."/{$id}");
    }

    public function update($id, $params)
    {
        return $this->sendRequest('PUT', self::$_url."/{$id}", $params);
    }

    public function delete($id)
    {
        return $this->sendRequest('DELETE', self::$_url."/{$id}");
    }

    public function run($id)
    {
        return $this->sendRequest('POST', self::$_url."/{$id}/run");
    }
}
