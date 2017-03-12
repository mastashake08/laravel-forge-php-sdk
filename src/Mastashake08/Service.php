<?php

namespace Mastashake08\Forge;

class Service
{
    use InteractsWithAPI;

    public function rebootMysql($id)
    {
        return $this->sendRequest('POST', "/{$id}/mysql/reboot");
    }

    public function stopMysql($id)
    {
        return $this->sendRequest('POST', "/{$id}/mysql/stop");
    }

    public function rebootNginx($id)
    {
        return $this->sendRequest('POST', "/{$id}/nginx/reboot");
    }

    public function stopNginx($id)
    {
        return $this->sendRequest('POST', "/{$id}/nginx/stop");
    }

    public function rebootPostgres($id)
    {
        return $this->sendRequest('POST', "/{$id}/postgres/reboot");
    }

    public function stopPostgres($id)
    {
        return $this->sendRequest('POST', "/{$id}/postgres/stop");
    }
}
