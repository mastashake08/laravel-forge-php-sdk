<?php

namespace Mastashake08\Forge;

class Recipe
{
    use InteractsWithAPI;

    /**
     * Create a new recipe
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create($params)
    {
        return $this->sendRequest('POST', '/recipes', $params);
    }

    /**
     * Get all recipes
     * @return \Psr\Http\Message\StreamInterface
     */
    public function all()
    {
        return $this->sendRequest('GET', '/recipes');
    }

    /**
     * Get just one recipe
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve($id)
    {
        return $this->sendRequest('GET', "/recipes/{$id}");
    }

    /**
     * Update a recipe
     * @param $id
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function update($id, $params)
    {
        return $this->sendRequest('PUT', "/recipes/{$id}", $params);
    }

    /**
     * Delete a recipe
     * @param $id
     * @return \Psr\Http\Message\StreamInterface
     */
    public function delete($id)
    {
        return $this->sendRequest('DELETE', "/recipes/{$id}");
    }

    /**
     * Run a recipe
     * @param $id
     * @param $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function run($id, $params)
    {
        return $this->sendRequest('POST', "/recipes/{$id}/run", $params);
    }
}
