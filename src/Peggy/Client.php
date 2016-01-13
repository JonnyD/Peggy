<?php

namespace Peggy;

use Peggy\API\App as AppApi;
use Peggy\API\Crawl as CrawlApi;
use Peggy\API\Result as ResultApi;
use Peggy\API\User as UserAPI;
use Peggy\API\Urllist as UrllistApi;
use Peggy\HttpClient\HttpClient;
use Peggy\HttpClient\HttpClientInterface;

class Client
{
    /**
     * @var string $apiKey
     */
    private $apiKey;

    /**
     * @var HttpClientInterface $httpClient
     */
    private $httpClient;

    /**
     * @param string $apiKey
     * @param HttpClientInterface $httpClient
     */
    public function __construct($apiKey, HttpClientInterface $httpClient = null)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    /**
     * @return HttpClientInterface
     */
    public function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = new HttpClient($this->apiKey);
        }

        return $this->httpClient;
    }

    /**
     * @param HttpClientInterface $httpClient
     */
    public function setHttpClient(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    //todo
    public function clearHeaders()
    {
        $this->getHttpClient()->clearHeaders();
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->getHttpClient()->setHeaders($headers);
    }

    /**
     * @return UserAPI
     */
    public function user()
    {
        return new UserAPI($this, $this->apiKey);
    }

    /**
     * @return AppApi
     */
    public function app()
    {
        return new AppApi($this);
    }

    /**
     * @return UrllistApi
     */
    public function urllist()
    {
        return new UrllistApi($this);
    }

    /**
     * @return CrawlApi
     */
    public function crawl()
    {
        return new CrawlApi($this);
    }

    /**
     * @return ResultApi
     */
    public function result()
    {
        return new ResultApi($this);
    }
}