<?php

namespace Mastashake08\Forge;

class Daemon
{
    use InteractsWithAPI;

    /**
     * Create a daemon for the given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $params)
    {
        return $this->sendRequest('POST', "servers/{$id}/daemons", $params);
    }

    /**
     * Get a single Daemon for a given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $params, $daemonId)
    {
        return $this->sendRequest('GET', "servers/{$id}/daemons/{$daemonId}", $params);
    }

    /**
     * Get all daemons for a given server.
     *
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($id)
    {
        return $this->sendRequest('GET', "servers/{$id}/daemons");
    }

    /**
     * Delete a daemon for a given server.
     *
     * @param $serverId
     * @param $daemonId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($serverId, $daemonId)
    {
        return $this->sendRequest('DELETE', "servers/{$serverId}/daemons/{$daemonId}");
    }

    /**
     * Restart a daemon for a given server.
     *
     * @param $serverId
     * @param $daemonId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function restart($serverId, $daemonId)
    {
        return $this->sendRequest('POST', "/{$serverId}/daemons/{$daemonId}/restart");
    }
}
