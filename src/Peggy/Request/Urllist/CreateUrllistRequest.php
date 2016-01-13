<?php

namespace Peggy\Request\Urllist;

class CreateUrllistRequest
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $filePath
     */
    private $filePath;

    /**
     * @param string $name
     * @param string $filePath
     */
    public function __construct($name, $filePath)
    {
        $this->name = $name;
        $this->filePath = $filePath;
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
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }
}