<?php

namespace Peggy\Response\App;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class AppResponse implements ResponseInterface
{
    /**
     * @JMS\Type("string")
     *
     * @var string $location
     */
    private $location;

    /**
     * @JMS\Type("string")
     *
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     *
     * @var string $description
     */
    private $description;

    /**
     * @JMS\Type("string")
     *
     * @var string $user
     */
    private $user;

    /**
     * @JMS\Type("string")
     *
     * @var string $dateCreated
     */
    private $dateCreated;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param string $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }


}