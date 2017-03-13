<?php

namespace Mastashake08\Forge;

class Mysql
{
    use InteractsWithAPI;

    /**
     * Create a new MySQL database for a given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/servers/{$id}/mysql", $params);
    }

    /**
     * Get all MySQL databases for a given server.
     *
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($id)
    {
        return $this->sendRequest('GET', "/servers/{$id}/mysql");
    }

    /**
     * Get a single MySQL database for a given server.
     *
     * @param $id
     * @param $databaseId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $databaseId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/mysql/{$databaseId}");
    }

    /**
     * Delete a single MySQL database for a given server.
     *
     * @param $id
     * @param $databaseId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id, $databaseId)
    {
        return $this->sendRequest('DELETE', "/servers/{$id}/mysql/{$databaseId}");
    }
}
