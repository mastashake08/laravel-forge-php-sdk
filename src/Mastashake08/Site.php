<?php

namespace Mastashake08\Forge;

class Site
{
    use InteractsWithAPI;

    /**
     * Create a new site for a given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $params)
    {
        return $this->sendRequest('POST', "servers/{$id}/sites", $params);
    }

    /**
     * Get all sites for a given server.
     *
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($id)
    {
        return $this->sendRequest('GET', "servers/{$id}/sites");
    }

    /**
     * Get a site for a given server.
     *
     * @param $id
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $siteId)
    {
        return $this->sendRequest('GET', "servers/{$id}/sites/{$siteId}");
    }

    /**
     * Update a site for a given server.
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
     * Delete a site from a given server
     * Please keep in mind that this will delete the domain's directory.
     *
     * @param $id
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id, $siteId)
    {
        return $this->sendRequest('DELETE', "servers/{$id}/sites/{$siteId}");
    }

    /**
     * This will specify the servers the load balancer should send traffic to.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function balance($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "servers/{$id}/sites/{$siteId}/balancing", $params);
    }
}
