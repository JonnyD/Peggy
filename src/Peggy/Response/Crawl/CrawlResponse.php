<?php

namespace Peggy\Response\Crawl;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class CrawlResponse implements ResponseInterface
{
    /**
     * @JMS\Type("integer")
     *
     * @var integer $id
     */
    private $id;

    /**
     * @JMS\Type("string")
     *
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     *
     * @var string $user
     */
    private $user;

    /**
     * @JMS\Type("string")
     *
     * @var string $userAgent
     */
    private $userAgent;

    /**
     * @JMS\Type("string")
     *
     * @var string $app
     */
    private $app;

    /**
     * @JMS\Type("string")
     *
     * @var string urlList
     */
    private $urlList;

    /**
     * @JMS\Type("string")
     *
     * @var string $data
     */
    private $data;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $depth
     */
    private $depth;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $maxDepth
     */
    private $maxDepth;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $urlsCrawled
     */
    private $urlsCrawled;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $maxUrls
     */
    private $maxUrls;

    /**
     * @JMS\Type("string")
     *
     * @var string $status
     */
    private $status;

    /**
     * @JMS\Type("string")
     *
     * @var string $dateCompleted
     */
    private $dateCompleted;

    /**
     * @JMS\Type("array")
     *
     * @var array $results
     */
    private $results;

    public function __construct()
    {
        $this->results = [];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param string $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @return string
     */
    public function getUrlList()
    {
        return $this->urlList;
    }

    /**
     * @param string $urlList
     */
    public function setUrlList($urlList)
    {
        $this->urlList = $urlList;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return integer
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param integer $depth
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    /**
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * @param int $maxDepth
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;
    }

    /**
     * @return int
     */
    public function getUrlsCrawled()
    {
        return $this->urlsCrawled;
    }

    /**
     * @param integer $urlsCrawled
     */
    public function setUrlsCrawled($urlsCrawled)
    {
        $this->urlsCrawled = $urlsCrawled;
    }

    /**
     * @return int
     */
    public function getMaxUrls()
    {
        return $this->maxUrls;
    }

    /**
     * @param int $maxUrls
     */
    public function setMaxUrls($maxUrls)
    {
        $this->maxUrls = $maxUrls;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isStarted()
    {
        return $this->status == CrawlStatus::STARTED;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->status == CrawlStatus::CANCELLED;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->status == CrawlStatus::COMPLETED;
    }

    /**
     * @return string
     */
    public function getDateCompleted()
    {
        return $this->dateCompleted;
    }

    /**
     * @param string $dateCompleted
     */
    public function setDateCompleted($dateCompleted)
    {
        $this->dateCompleted = $dateCompleted;
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param array $results
     */
    public function setResults(array $results)
    {
        $this->results = $results;
    }
}