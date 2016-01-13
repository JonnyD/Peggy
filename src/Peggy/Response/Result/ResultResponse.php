<?php

namespace Peggy\Response\Result;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class ResultResponse implements ResponseInterface
{
    /**
     * @JMS\Type("array")
     *
     * @var string $urls
     */
    private $urls;

    /**
     * @return string
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param string $urls
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;
    }
}