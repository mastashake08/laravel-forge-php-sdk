<?php

namespace Mastashake08\Forge;

class Config
{
    use InteractsWithAPI;

    public function getNginx($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}/nginx");
    }

    public function updateNginx($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/sites/{$siteId}/nginx", $params);
    }

    public function getEnv($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}/env");
    }

    public function updateEnv($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/sites/{$siteId}/env", $params);
    }
}
