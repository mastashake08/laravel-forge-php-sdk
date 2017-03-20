<?php

namespace Mastashake08\Forge;

class Git
{
    use InteractsWithAPI;

    /**
     * Install a new git project.
     *
     * @param $id
     * @param $siteId
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function install($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "servers/{$id}/sites/{$siteId}/git", $params);
    }

    /**
     * Remove a git project.
     *
     * @param $id
     * @param $siteId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function uninstall($id, $siteId)
    {
        return $this->sendRequest('DELETE', "servers/{$id}/sites/{$siteId}/git");
    }
}
