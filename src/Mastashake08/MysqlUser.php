<?php

namespace Mastashake08\Forge;

class MysqlUser
{
    use InteractsWithAPI;

    /**
     * Create the MySQL User for a given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/servers/{$id}/mysql-users", $params);
    }

    /**
     * Retrieve all the users for a given server.
     *
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($id)
    {
        return $this->sendRequest('GET', "/servers/{$id}/mysql-users");
    }

    /**
     * Get a single user from a given server.
     *
     * @param $id
     * @param $userId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $userId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/mysql-users/{$userId}");
    }

    /**
     * Update the user from a given server.
     *
     * @param $id
     * @param $userId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function update($id, $userId, $params)
    {
        return $this->sendRequest('PUT', "/servers/{$id}/mysql-users/{$userId}", $params);
    }

    /**
     * Delete the user for a given server.
     *
     * @param $id
     * @param $userId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id, $userId)
    {
        return $this->sendRequest('DELETE', "/servers/{$id}/mysql-users/{$userId}");
    }
}
