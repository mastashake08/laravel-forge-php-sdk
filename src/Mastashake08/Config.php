<?php

namespace Mastashake08\Forge;

class Config
{
    public static function getNginx($id, $siteId)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/nginx");
    }

    public static function updateNginx($id, $siteId, $params)
    {
        return ApiRequestor::sendRequest('PUT', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/nginx", $params);
    }

    public static function getEnv($id, $siteId)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/env");
    }

    public static function updateEnv($id, $siteId, $params)
    {
        return ApiRequestor::sendRequest('PUT', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/env", $params);
    }
}
