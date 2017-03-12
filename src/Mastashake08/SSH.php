<?php

namespace Mastashake08\Forge;

class SSH
{
    use InteractsWithAPI;

    /**
     * Associate a new key for a given server
     * @param $serverId
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($serverId, $params)
    {
        return $this->sendRequest('POST', "/servers/{$serverId}/keys", $params);
    }

    /**
     * Get all the keys for a given server
     * @param $serverId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($serverId)
    {
        return $this->sendRequest('GET', "/servers/{$serverId}/keys");
    }

    /**
     * Get a single SSH key for a given server
     * @param $serverId
     * @param $keyId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($serverId, $keyId)
    {
        return $this->sendRequest('POST', "/servers/{$serverId}/keys/{$keyId}");
    }

    /**
     * Delete an SSH key for a given server
     * @param $serverId
     * @param $keyId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($serverId, $keyId)
    {
        return $this->sendRequest('DELETE', "/servers/{$serverId}/keys/{$keyId}");
    }
}
