<?php

namespace Mastashake08\Forge;

class Mysql
{
    use InteractsWithAPI;

    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/{$id}/mysql", $params);
    }

    public function all($id)
    {
        return $this->sendRequest('GET', "/{$id}/mysql");
    }

    public function retrieve($id, $databaseId)
    {
        return $this->sendRequest('POST', "/{$id}/mysql/{$databaseId}");
    }

    public function delete($id, $databaseId)
    {
        return $this->sendRequest('DELETE', "/{$id}/mysql/{$databaseId}");
    }
}
