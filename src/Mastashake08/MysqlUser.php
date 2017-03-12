<?php

namespace Mastashake08\Forge;

class MysqlUser
{
    use InteractsWithAPI;

    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/{$id}/mysql-users", $params);
    }

    public function all($id)
    {
        return $this->sendRequest('GET', "/{$id}/mysql-users");
    }

    public function retrieve($id, $userId)
    {
        return $this->sendRequest('POST', "/{$id}/mysql-users/{$userId}");
    }

    public function update($id, $userId, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/mysql-users/{$userId}", $params);
    }

    public function delete($id, $userId)
    {
        return $this->sendRequest('DELETE', "/{$id}/mysql-users/{$userId}");
    }
}
