<?php

namespace Peggy\Response\App;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class ListAppsResponse implements ResponseInterface
{
    /**
     * @JMS\Type("array<Peggy\Response\App\AppResponse>")
     *
     * @var AppResponse[]
     */
    protected $data;

    /**
     * @return AppResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param AppResponse[] $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}