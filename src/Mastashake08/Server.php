<?php

namespace Mastashake08\Forge;

class Server
{
    use InteractsWithAPI;

    public function all()
    {
        return $this->sendRequest('GET', Forge::getBaseUrl());
    }

    public function retrieve($id)
    {
        return $this->sendRequest('GET', "/{$id}");
    }

    public function create($params)
    {
        return $this->sendRequest('POST', Forge::getBaseUrl(), $params);
    }

    public function update($id, $params)
    {
        return $this->sendRequest('PUT', "/{$id}", $params);
    }

    public function updatePassword($id, $params)
    {
        return $this->sendRequest('PUT', "/{$id}/database-password", $params);
    }

    public function delete($id)
    {
        return $this->sendRequest('DELETE', "/{$id}");
    }

    public function rebootServer($id)
    {
        return $this->sendRequest('POST', "/{$id}/reboot");
    }

    public function revoke($id)
    {
        return $this->sendRequest('POST', "/{$id}/revoke");
    }

    public function reconnect($id)
    {
        return $this->sendRequest('POST', "/{$id}/reconnect");
    }

    public function reactivate($id)
    {
        return $this->sendRequest('POST', "/{$id}/reactivate");
    }
}
