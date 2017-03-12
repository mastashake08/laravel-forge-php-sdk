<?php

namespace Mastashake08\Forge;

class Server
{
    use InteractsWithAPI;

    /**
     * Get all servers
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all()
    {
        return $this->sendRequest('GET', '/servers');
    }

    /**
     * Get one server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id)
    {
        return $this->sendRequest('GET', "/servers/{$id}");
    }

    /**
     * Create a new server
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($params)
    {
        return $this->sendRequest('POST', '/servers', $params);
    }

    /**
     * Update a server
     * @param $id
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function update($id, $params)
    {
        return $this->sendRequest('PUT', "/servers/{$id}", $params);
    }

    /**
     * Update Forge's knowledge of the primary database password
     * @param $id
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function updatePassword($id, $params)
    {
        return $this->sendRequest('PUT', "/servers/{$id}/database-password", $params);
    }

    /**
     * Remove a server from Forge's API (not from the PaaS)
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id)
    {
        return $this->sendRequest('DELETE', "/servers/{$id}");
    }

    /**
     * Reboot a server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function rebootServer($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/reboot");
    }

    /**
     * Remove Forge's access to the server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function revoke($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/revoke");
    }

    /**
     * Reconnect a revoked server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function reconnect($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/reconnect");
    }

    /**
     * Reactivate the revoked server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function reactivate($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/reactivate");
    }
}
