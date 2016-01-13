<?php

namespace Peggy\API;

use Peggy\Client;

use Peggy\Response\User\UserResponse;

class User extends AbstractAPI
{
    const USER_RESPONSE_CLASS = 'Peggy\Response\User\UserResponse';

    /**
     * @var string $apiKey
     */
    private $apiKey;

    /**
     * @param Client $client
     * @param string $apiKey
     */
    public function __construct(Client $client, $apiKey)
    {
        parent::__construct($client);

        $this->apiKey = $apiKey;
    }

    /**
     * @return UserResponse
     */
    public function me()
    {
        return $this->get($this->apiKey);
    }

    /**
     * @param string $token
     * @return UserResponse
     */
    public function get($token)
    {
        return $this->getRequest('users/'.urlencode($token), self::USER_RESPONSE_CLASS);
    }
}