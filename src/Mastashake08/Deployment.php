<?php

namespace Mastashake08\Forge;

class Deployment
{
    public static function enable($id, $siteId)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment");
    }

    public static function disable($id, $siteId)
    {
        return ApiRequestor::sendRequest('DELETE', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment");
    }

    public static function getScript($id, $siteId)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment/script");
    }

    public static function getLog($id, $siteId)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment/log");
    }

    public static function update($id, $siteId, $params)
    {
        return ApiRequestor::sendRequest('PUT', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment/script", $params);
    }

    public static function deploy($id, $siteId)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment/deploy");
    }

    public static function reset($id, $siteId)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/deployment/reset");
    }

    public static function letsEncrypt($id, $siteId)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/letsencrypt", $params);
    }

    public static function getSigningRequest($serverId, $siteId, $id)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/deployment/{$id}/csr");
    }

    public static function deleteRequest($serverId, $siteId, $id)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/deployment/{$id}/install", $params);
    }
}
