<?php

namespace Mastashake08\Forge;

class Worker
{
    use InteractsWithAPI;

    public function create($serverId, $params)
    {
        return $this->sendRequest('POST', "/{$serverId}/keys", $params);
    }

    public function all($serverId)
    {
        return $this->sendRequest('GET', "/{$serverId}/keys");
    }

    public function retrieve($serverId, $keyId)
    {
        return $this->sendRequest('POST', "/{$serverId}/keys/{$keyId}");
    }

    public function delete($serverId, $keyId)
    {
        return $this->sendRequest('DELETE', "/{$serverId}/keys/{$keyId}");
    }
}
