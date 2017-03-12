<?php

namespace Mastashake08\Forge;

class Service
{
    use InteractsWithAPI;

    /**
     * Reboot the MySQL instance for a given server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function rebootMysql($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/mysql/reboot");
    }

    /**
     * Stop the MySQL instance for a given server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function stopMysql($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/mysql/stop");
    }

    /**
     * Reboot the Nginx instance for a given server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function rebootNginx($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/nginx/reboot");
    }

    /**
     * Stop the Nginx instance for a given server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function stopNginx($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/nginx/stop");
    }

    /**
     * Reboot the Postgres instance for a given server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function rebootPostgres($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/postgres/reboot");
    }

    /**
     * Stop the Postgres instance for a given server
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function stopPostgres($id)
    {
        return $this->sendRequest('POST', "/servers/{$id}/postgres/stop");
    }
}
