<?php

namespace Mastashake08\Forge;

class Job
{
    public static function create($id, $params)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/jobs", $params);
    }

    public static function all($id)
    {
        return ApiRequestor::sendRequest('GET', Forge::getBaseUrl()."/{$id}/jobs");
    }

    public static function retrieve($id, $jobId)
    {
        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/jobs/{$jobId}");
    }

    public static function delete($id, $jobId)
    {
        return ApiRequestor::sendRequest('DELETE', Forge::getBaseUrl()."/{$id}/jobs/{$jobId}");
    }
}
