<?php

namespace Mastashake08\Forge;

class Git
{
    use InteractsWithAPI;

    public function install($id, $siteId, $params)
    {
        return $this->sendRequest('POST', "/{$id}/sites/{$siteId}/git", $params);
    }

    public function uninstall($id, $siteId)
    {
        return $this->sendRequest('DELETE', "/{$id}/sites/{$siteId}/git");
    }
}
