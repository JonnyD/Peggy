<?php

namespace Peggy\API;

use Peggy\Request\Crawl\CreateCrawlRequest;
use Peggy\Response\Crawl\ListCrawlsResponse;
use Peggy\Response\Crawl\CrawlResponse;

class Crawl extends AbstractAPI
{
    const CRAWL_RESPONSE_CLASS = 'Peggy\Response\Crawl\CrawlResponse';
    const LIST_CRAWLS_RESPONSE_CLASS = 'Peggy\Response\Crawl\ListCrawlsResponse';

    /**
     * @return CrawlResponse[]
     */
    public function all()
    {
        /** @var ListCrawlsResponse $listCrawlsResponse */
        $listCrawlsResponse = $this->getRequest('crawls/', self::LIST_CRAWLS_RESPONSE_CLASS);
        $allCrawls = $listCrawlsResponse->getData();
        return $allCrawls;
    }

    /**
     * @param CreateCrawlRequest $request
     * @return CrawlResponse
     * @throws \Exception
     */
    public function create(CreateCrawlRequest $request)
    {
        $headers = ['content-type' => 'application/json'];
        $response = $this->postRequest('crawls/' . $request->getName(), self::CRAWL_RESPONSE_CLASS, $request, $headers);
        return $response;
    }

    /**
     * @param string $crawlName
     * @return CrawlResponse
     */
    public function get($crawlName)
    {
        return $this->getRequest('crawls/'.urlencode($crawlName), self::CRAWL_RESPONSE_CLASS);
    }

    /**
     * @param string $crawlName
     * @return null
     */
    public function cancel($crawlName)
    {
        return $this->deleteRequest('crawls/'.urlencode($crawlName));
    }

    /**
     * @param string $name
     * @param string $app
     * @param string $urllist
     * @param integer $maxDepth
     * @param integer $maxUrls
     * @return CreateCrawlRequest
     */
    public function createCrawlRequest($name, $app, $urllist, $maxDepth, $maxUrls)
    {
        return new CreateCrawlRequest($name, $app, $urllist, $maxDepth, $maxUrls);
    }
}