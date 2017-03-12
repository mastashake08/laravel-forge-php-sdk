<?php

namespace Mastashake08\Forge;

class Daemon
{
    use InteractsWithAPI;

    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/{$id}/daemons", $params);
    }

    public function all($id)
    {
        return $this->sendRequest('GET', "/{$id}/daemons");
    }

    public function delete($serverId, $daemonId)
    {
        return $this->sendRequest('DELETE', "/{$serverId}/daemons/{$daemonId}");
    }

    public function restart($serverId, $daemonId)
    {
        return $this->sendRequest('POST', "/{$serverId}/daemons/{$daemonId}/restart");
    }
}
