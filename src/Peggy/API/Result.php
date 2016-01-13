<?php

namespace Peggy\API;

use Peggy\Response\Result\ResultResponse;

class Result extends AbstractAPI
{
    const RESULT_RESPONSE_CLASS = 'Peggy\Response\Result\ResultResponse';

    /**
     * @param string $crawlName
     * @return ResultResponse
     */
    public function get($crawlName)
    {
        return $this->getRequest('results/'.urlencode($crawlName), self::RESULT_RESPONSE_CLASS);
    }
}