<?php

namespace Peggy\Response\UrlList;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class ListUrlListResponse implements ResponseInterface
{
    /**
     * @JMS\Type("array<Peggy\Response\UrlList\UrlListResponse>")
     *
     * @var UrlListResponse[]
     */
    protected $data;

    /**
     * @return UrlListResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param UrlListResponse[] $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}