<?php

namespace Mastashake08\Forge;

class Config
{
    use InteractsWithAPI;

    /**
     * Get the Nginx config for a given site on a server.
     *
     * @param $id
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getNginx($id, $siteId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/sites/{$siteId}/nginx");
    }

    /**
     * Update an Nginx config for a given site on a server.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function updateNginx($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/servers/{$id}/sites/{$siteId}/nginx", $params);
    }

    /**
     * Get the Env config for a given site on a server.
     *
     * @param $id
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getEnv($id, $siteId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/sites/{$siteId}/env");
    }

    /**
     * Update the Env file for a given site on a serve.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function updateEnv($id, $siteId, $params)
    {
        return $this->sendRequest('PUT', "/servers/{$id}/sites/{$siteId}/env", $params);
    }
}
