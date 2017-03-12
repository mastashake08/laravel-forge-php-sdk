<?php

namespace Mastashake08\Forge;

class Wordpress
{
    use InteractsWithAPI;

    /**
     * Install a new instance of WordPress
     * @param $id
     * @param $siteId
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function install($id, $siteId, $params)
    {
        echo "/{$id}/sites/{$siteId}/wordpress";

        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/wordpress", $params);
    }

    /**
     * Uninstall an instance of WordPress
     * @param $id
     * @param $siteId
     * @return \Psr\Http\Message\StreamInterface
     */
    public function uninstall($id, $siteId)
    {
        return $this->sendRequest('DELETE', "/{$id}/sites/{$siteId}/wordpress");
    }
}
