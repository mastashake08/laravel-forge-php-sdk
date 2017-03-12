<?php

namespace Mastashake08\Forge;

class Deployment
{
    use InteractsWithAPI;

    /**
     * Enable quick deployment for a site on a given server
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function enable($id, $siteId)
    {
        return $this->sendRequest('POST', "/servers/{$id}/sites/{$siteId}/deployment");
    }

    /**
     * Disable quick deployment for a site on a given server
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function disable($id, $siteId)
    {
        return $this->sendRequest('DELETE', "/servers/{$id}/sites/{$siteId}/deployment");
    }

    /**
     * Get the deployment script of a site for a given server
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getScript($id, $siteId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/sites/{$siteId}/deployment/script");
    }

    /**
     * Get the most recent deployment script's log
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getLog($id, $siteId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/sites/{$siteId}/deployment/log");
    }

    /**
     * Update a deployment script for a site on a given server
     * @param $id
     * @param $siteId
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function update($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/servers/{$id}/sites/{$siteId}/deployment/script", $params);
    }

    /**
     * Deploy using the deployment script for a site on a given server
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function deploy($id, $siteId)
    {
        return $this->sendRequest('POST', "/servers/{$id}/sites/{$siteId}/deployment/deploy");
    }

    /**
     * Reset the deployment status for a site on a given server
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function reset($id, $siteId)
    {
        return $this->sendRequest('POST', "/servers/{$id}/sites/{$siteId}/deployment/reset");
    }

    /**
     * Obtain a LetsEncrypt certificate
     * @param $id
     * @param $siteId
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function letsEncrypt($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "/servers/{$id}/sites/{$siteId}/letsencrypt", $params);
    }

    /**
     * Get the full certificate signing request content
     * @param $serverId
     * @param $siteId
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getSigningRequest($serverId, $siteId, $id)
    {
        return $this->sendRequest('GET', "/servers/{$serverId}/sites/{$siteId}/deployment/{$id}/csr");
    }

    /**
     *
     * @param $serverId
     * @param $siteId
     * @param $id
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function deleteRequest($serverId, $siteId, $id, $params)
    {
        return $this->sendRequest('POST', "/servers/{$serverId}/sites/{$siteId}/deployment/{$id}/install", $params);
    }
}
