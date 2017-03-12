<?php

namespace Mastashake08\Forge;

class Job
{
    use InteractsWithAPI;

    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/{$id}/jobs", $params);
    }

    public function all($id)
    {
        return $this->sendRequest('GET', "/{$id}/jobs");
    }

    public function retrieve($id, $jobId)
    {
        return $this->sendRequest('POST', "/{$id}/jobs/{$jobId}");
    }

    public function delete($id, $jobId)
    {
        return $this->sendRequest('DELETE', "/{$id}/jobs/{$jobId}");
    }
}
