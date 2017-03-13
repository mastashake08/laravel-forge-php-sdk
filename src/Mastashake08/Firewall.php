<?php

namespace Mastashake08\Forge;

class Firewall
{
    use InteractsWithAPI;

    /**
     * Create a new firewall rule for a given server.
     *
     * @param $id
     * @param $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/servers/{$id}/firewall-rules", $params);
    }

    /**
     * List all firewall rules for a given server.
     *
     * @param $id
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function list($id)
    {
        return $this->sendRequest('GET', "/servers/{$id}/firewall-rules");
    }

    /**
     * Get a single firewall rule for a given server.
     *
     * @param $id
     * @param $ruleId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id, $ruleId)
    {
        return $this->sendRequest('GET', "/servers/{$id}/firewall-rules/{$ruleId}");
    }

    /**
     * Delete a firewall rule for a given server.
     *
     * @param $id
     * @param $ruleId
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id, $ruleId)
    {
        return $this->sendRequest('DELETE', "/servers/{$id}/firewall-rules/{$ruleId}");
    }
}
