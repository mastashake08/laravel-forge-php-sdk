<?php

namespace Mastashake08\Forge;

class Certificate
{
    use InteractsWithAPI;

    /**
     * Create a SSL Cert for a site on a given server.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "servers/{$id}/sites/{$siteId}/certificates", $params);
    }

    /**
     * Get a single SSL Cert for a site on a given server.
     *
     * @param $id
     * @param $siteId
     * @param $certId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $siteId, $certId)
    {
        return $this->sendRequest('GET', "servers/{$id}/sites/{$siteId}/certificates/{$certId}");
    }

    /**
     * Get all SSL Certs for a site on a given server.
     *
     * @param $id
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($id, $siteId)
    {
        return $this->sendRequest('GET', "servers/{$id}/sites/{$siteId}/certificates");
    }

    /**
     * Update an SLL Cert for a site on a given server.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function update($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "servers/{$id}/sites/{$siteId}", $params);
    }

    /**
     * Delete an SSL Cert for a site on a given server.
     *
     * @param $id
     * @param $siteId
     * @param $certId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id, $siteId, $certId)
    {
        return $this->sendRequest('DELETE', "servers/{$id}/sites/{$siteId}/certificates/{$certId}");
    }

    /**
     * Obtain an SSL Cert for a site on a given server.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function letsEncrypt($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "servers/{$id}/sites/{$siteId}/certificates/letsencrypt", $params);
    }

    /**
     * Get a signing request for a site on a given server.
     *
     * @param $serverId
     * @param $siteId
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getSigningRequest($serverId, $siteId, $id)
    {
        return $this->sendRequest('GET', "servers/{$serverId}/sites/{$siteId}/certificates/{$id}/csr");
    }

    /**
     * Install an SSL Cert for a site on a given server.
     *
     * @param $serverId
     * @param $siteId
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function install($serverId, $siteId, $id, $params)
    {
        return $this->sendRequest('POST', "servers/{$serverId}/sites/{$siteId}/certificates/{$id}/install", $params);
    }

    /**
     * Activate an SSL Cert for a site on a given server.
     *
     * @param $serverId
     * @param $siteId
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function activate($serverId, $siteId, $id)
    {
        return $this->sendRequest('POST', "servers/{$serverId}/sites/{$siteId}/certificates/{$id}/activate");
    }
}
