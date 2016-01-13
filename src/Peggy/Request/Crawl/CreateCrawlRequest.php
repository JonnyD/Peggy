<?php

namespace Peggy\Request\Crawl;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class CreateCrawlRequest
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     *
     * @var string $app
     */
    private $app;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     *
     * @var string $urllist
     */
    private $urllist;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     *
     * @var string $data
     */
    private $data;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     *
     * @var integer $maxDepth
     */
    private $maxDepth;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     *
     * @var integer $maxUrls
     */
    private $maxUrls;

    /**
     * CreateCrawlRequest constructor.
     * @param string $name
     * @param string $app
     * @param string $urllist
     * @param integer $maxDepth
     * @param integer $maxUrls
     */
    public function __construct($name, $app, $urllist, $maxDepth, $maxUrls)
    {
        $this->name = $name;
        $this->app = $app;
        $this->urllist = $urllist;
        $this->maxDepth = $maxDepth;
        $this->maxUrls = $maxUrls;
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
    public function getUrllist()
    {
        return $this->urllist;
    }

    /**
     * @param string $urllist
     */
    public function setUrllist($urllist)
    {
        $this->urllist = $urllist;
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
}