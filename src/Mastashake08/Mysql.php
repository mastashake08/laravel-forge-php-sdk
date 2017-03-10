<?php

namespace Mastashake08\Forge;

class Mysql
{
    public static function create($id, $params)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/mysql", $params);
    }

    public static function all($id)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$id}/mysql");
    }

    public static function retrieve($id, $databaseId)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/mysql/{$databaseId}");
    }

    public static function delete($id, $databaseId)
    {
        return ApiRequestor::sendRequest('DELETE', Forge::getBaseUrl()."/{$id}/mysql/{$databaseId}");
    }
}
