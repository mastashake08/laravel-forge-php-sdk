<?php

namespace Mastashake08\Forge;

class Deployment
{
    use InteractsWithAPI;

    public function enable($id, $siteId)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/deployment");
    }

    public function disable($id, $siteId)
    {
        return $this->sendRequest('DELETE', "/{$id}/sites/{$siteId}/deployment");
    }

    public function getScript($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}/deployment/script");
    }

    public function getLog($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}/deployment/log");
    }

    public function update($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/sites/{$siteId}/deployment/script", $params);
    }

    public function deploy($id, $siteId)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/deployment/deploy");
    }

    public function reset($id, $siteId)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/deployment/reset");
    }

    public function letsEncrypt($id, $siteId)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/letsencrypt", $params);
    }

    public function getSigningRequest($serverId, $siteId, $id)
    {
        return $this->sendRequest('GET', "/{$serverId}/sites/{$siteId}/deployment/{$id}/csr");
    }

    public function deleteRequest($serverId, $siteId, $id)
    {
        return $this->sendRequest('POST', "/{$serverId}/sites/{$siteId}/deployment/{$id}/install", $params);
    }
}
