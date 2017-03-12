<?php

namespace Mastashake08\Forge;

class SSH
{
    use InteractsWithAPI;

    public function create($serverId, $siteId, $params)
    {
        return $this->sendRequest('POST', "/{$serverId}/sites/{$siteId}/workers", $params);
    }

    public function all($serverId, $siteId)
    {
        return $this->sendRequest('GET', "/{$serverId}/sites/{$siteId}/workers");
    }

    public function retrieve($serverId, $siteId, $workerId)
    {
        return $this->sendRequest('POST', "/{$serverId}/sites/{$siteId}/workers/{$workerId}");
    }

    public function delete($serverId, $siteId, $workerId)
    {
        return $this->sendRequest('DELETE', "/{$serverId}/sites/{$siteId}/workers/{$workerId}");
    }

    public function restart($serverId, $siteId, $workerId)
    {
        return $this->sendRequest('POST', "/{$serverId}/sites/{$siteId}/workers/{$workerId}/restart");
    }
}
