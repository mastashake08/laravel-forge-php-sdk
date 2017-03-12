<?php

namespace Mastashake08\Forge;

class Wordpress
{
    use InteractsWithAPI;

    public function install($id, $siteId, $params)
    {
        echo "/{$id}/sites/{$siteId}/wordpress";

        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/wordpress", $params);
    }

    public function uninstall($id, $siteId)
    {
        return $this->sendRequest('DELETE', "/{$id}/sites/{$siteId}/wordpress");
    }
}
