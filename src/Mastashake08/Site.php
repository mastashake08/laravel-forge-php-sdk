<?php

namespace Mastashake08\Forge;

class Site
{
    use InteractsWithAPI;

    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/{$id}/sites", $params);
    }

    public function all($id)
    {
        return $this->sendRequest('GET', "/{$id}/sites");
    }

    public function retrieve($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}");
    }

    public function update($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/sites/{$siteId}", $params);
    }

    public function delete($id, $siteId)
    {
        return $this->sendRequest('DELETE', "/{$id}/sites/{$siteId}");
    }

    public function balance($id, $siteId)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/balancing");
    }
}
