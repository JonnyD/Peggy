<?php

namespace Peggy\Response\Crawl;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class ListCrawlsResponse implements ResponseInterface
{
    /**
     * @JMS\Type("array<Peggy\Response\Crawl\CrawlResponse>")
     *
     * @var CrawlResponse[]
     */
    protected $data;

    /**
     * @return CrawlResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CrawlResponse[] $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}