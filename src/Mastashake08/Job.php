<?php

namespace Mastashake08\Forge;

class Job
{
    use InteractsWithAPI;

    /**
     * Create a new Job for a given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/servers/{$id}/jobs", $params);
    }

    /**
     * Get all the jobs for a given server.
     *
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all($id)
    {
        return $this->sendRequest('GET', "/servers/{$id}/jobs");
    }

    /**
     * Get a single job for a given server.
     *
     * @param $id
     * @param $jobId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $jobId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/jobs/{$jobId}");
    }

    /**
     * Delete a single job for a given server.
     *
     * @param $id
     * @param $jobId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id, $jobId)
    {
        return $this->sendRequest('DELETE', "/servers/{$id}/jobs/{$jobId}");
    }
}
