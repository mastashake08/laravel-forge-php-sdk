<?php

namespace Mastashake08\Forge;

class Firewall
{
    use InteractsWithAPI;

    public function create($id, $params)
    {
        return $this->sendRequest('POST', "/{$id}/firewall-rules", $params);
    }

    public function list($id)
    {
        return $this->sendRequest('GET', "/{$id}/firewall-rules");
    }

    public function retrieve($id, $ruleId)
    {
        return $this->sendRequest('GET', "/{$id}/firewall-rules/{$ruleId}");
    }

    public function delete($id, $ruleId)
    {
        return $this->sendRequest('DELETE', "/{$id}/firewall-rules/{$ruleId}");
    }
}
