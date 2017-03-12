<?php

namespace Mastashake08\Forge;

class Certificate
{
    use InteractsWithAPI;

    public function create($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/certificates", $params);
    }

    public function all($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}/certificates");
    }

    public function retrieve($id, $siteId)
    {
        return $this->sendRequest('GET', "/{$id}/sites/{$siteId}/certificates");
    }

    public function update($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/sites/{$siteId}", $params);
    }

    public function delete($id, $siteId, $certId)
    {
        return $this->sendRequest('DELETE', "/{$id}/sites/{$siteId}/certificates/{$certId}");
    }

    public function letsEncrypt($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/letsencrypt", $params);
    }

    public function getSigningRequest($serverId, $siteId, $id)
    {
        return $this->sendRequest('GET', "/{$serverId}/sites/{$siteId}/certificates/{$id}/csr");
    }

    public function deleteRequest($serverId, $siteId, $id)
    {
        return $this->sendRequest('POST', "/{$serverId}/sites/{$siteId}/certificates/{$id}/install", $params);
    }
}
