<?php

namespace Mastashake08\Forge;

class Credential
{
    use InteractsWithAPI;

    /**
     * Gets the credentials of the Platforms as a Service
     * associated with the account.
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all()
    {
        return $this->sendRequest('GET', '/credentials');
    }
}
