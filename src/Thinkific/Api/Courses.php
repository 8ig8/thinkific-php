<?php

namespace Thinkific\Api;

class Courses extends AbstractApi
{

    /**
     * @throws ApiException
     */
    public function getAll()
    {
        throw new ApiException(["Not Supported" => ["The API Call 'getAll()' is not supported by the Thinkific Api"]]);
    }

    /**
     * @param $id
     *
     * @return object
     */
    public function getById($id)
    {
        $split = preg_split('/\\\/', get_class($this));

        return $this->client->request([
            "endpoint" => strtolower(array_pop($split)),
            "id"       => $id,
        ]);
    }
}
