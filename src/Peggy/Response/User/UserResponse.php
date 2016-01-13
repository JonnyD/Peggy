<?php

namespace Peggy\Response\User;

use JMS\Serializer\Annotation as JMS;
use Peggy\Response\ResponseInterface;

class UserResponse implements ResponseInterface
{
    /**
     * @JMS\Type("string")
     *
     * @var string $token
     */
    private $token;

    /**
     * @JMS\Type("string")
     *
     * @var string $organization
     */
    private $organization;

    /**
     * @JMS\Type("string")
     *
     * @var string $email
     */
    private $email;

    /**
     * @JMS\Type("string")
     *
     * @var string $firstName
     */
    private $firstName;

    /**
     * @JMS\Type("string")
     *
     * @var string $lastName
     */
    private $lastName;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $phoneNumber
     */
    private $phoneNumber;

    /**
     * @JMS\Type("string")
     *
     * @var string $stripeCustomerId
     */
    private $stripeCustomerId;

    /**
     * @JMS\Type("string")
     *
     * @var string $planId
     */
    private $planId;

    /**
     * @JMS\Type("string")
     *
     * @var string $type
     */
    private $type;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $active
     */
    private $active;

    /**
     * @JMS\Type("integer")
     *
     * @var integer $urlsCrawled
     */
    private $urlsCrawled;

    /**
     * @JMS\Type("string")
     *
     * @var string $dateRegistered
     */
    private $dateRegistered;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param int $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getStripeCustomerId()
    {
        return $this->stripeCustomerId;
    }

    /**
     * @param string $stripeCustomerId
     */
    public function setStripeCustomerId($stripeCustomerId)
    {
        $this->stripeCustomerId = $stripeCustomerId;
    }

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @param string $planId
     */
    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getUrlsCrawled()
    {
        return $this->urlsCrawled;
    }

    /**
     * @param int $urlsCrawled
     */
    public function setUrlsCrawled($urlsCrawled)
    {
        $this->urlsCrawled = $urlsCrawled;
    }

    /**
     * @return mixed
     */
    public function getDateRegistered()
    {
        return $this->dateRegistered;
    }

    /**
     * @param mixed $dateRegistered
     */
    public function setDateRegistered($dateRegistered)
    {
        $this->dateRegistered = $dateRegistered;
    }


}