<?php
namespace Mastashake08\Forge;

class Worker
{
    use InteractsWithAPI;

    /**
     * Create a new worker for a site on a given server
     * @param $serverId
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($serverId, $siteId, $params)
    {
        return $this->sendRequest('POST', "servers/{$serverId}/sites/{$siteId}/workers", $params);
    }

    /**
     * Get all works for a site on a given server
     * @param $serverId
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($serverId, $siteId)
    {
        return $this->sendRequest('GET', "servers/{$serverId}/sites/{$siteId}/workers");
    }

    /**
     * Get a single worker for a site on a given server
     * @param $serverId
     * @param $siteId
     * @param $workerId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($serverId, $siteId, $workerId)
    {
        return $this->sendRequest('POST', "servers/{$serverId}/sites/{$siteId}/workers/{$workerId}");
    }

    /**
     * Delete a worker for a site on a given server
     * @param $serverId
     * @param $siteId
     * @param $workerId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($serverId, $siteId, $workerId)
    {
        return $this->sendRequest('DELETE', "servers/{$serverId}/sites/{$siteId}/workers/{$workerId}");
    }

    /**
     * Restart a worker for a site on a given server
     * @param $serverId
     * @param $siteId
     * @param $workerId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function restart($serverId, $siteId, $workerId)
    {
        return $this->sendRequest('POST', "servers/{$serverId}/sites/{$siteId}/workers/{$workerId}/restart");
    }
}
