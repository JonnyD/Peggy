<?php

namespace Peggy\HttpClient;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client as GuzzleClient;
use JMS\Serializer\SerializerBuilder;
use Peggy\Response\Result\ResultResponse;

class HttpClient implements HttpClientInterface
{
    /**
     * @var array $options
     */
    protected $options = [
        'base_uri'    => 'https://api.80legs.com/v2/',
        'user_agent'  => 'peggy (http://github.com/JonnyD/peggy)',
        'timeout'     => 10,
        'api_limit'   => 5000,
        'api_version' => 'v2',
        'cache_dir'   => null
    ];

    /**
     * @var array $headers
     */
    protected $headers = [];

    /**
     * @var string $apiKey
     */
    private $apiKey;

    private $lastResponse;

    private $lastRequest;

    /**
     * @var GuzzleClient $client
     */
    private $client;

    /**
     * @param string $apiKey
     * @param array $options
     * @param ClientInterface $client
     */
    public function __construct($apiKey, array $options = array(), ClientInterface $client = null)
    {
        $this->apiKey = $apiKey;
        $this->options = array_merge($this->options, $options);
        if (!$client) {
            $client = new GuzzleClient($this->options);
        }
        $this->client = $client;
        $this->clearHeaders();
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);
    }

    public function clearHeaders()
    {
        $this->headers = array(
            'Accept' => sprintf('application/vnd.github.%s+json', $this->options['api_version']),
            'User-Agent' => sprintf('%s', $this->options['user_agent']),
        );
    }

    public function get($path, $deserializeTo = null, array $parameters = array(), array $headers = array())
    {
        return $this->request($path, $deserializeTo, null, 'GET', $headers, array('query' => $parameters));
    }

    public function post($path, $deserializeTo = null, $body = null, array $headers = array())
    {
        return $this->request($path, $deserializeTo, $body, 'POST', $headers);
    }

    public function patch($path, $body = null, array $headers = array())
    {
        return $this->request($path, $body, 'PATCH', $headers);
    }

    public function delete($path, $deserializeTo = null, $body = null, array $headers = array())
    {
        return $this->request($path, $deserializeTo, $body, 'DELETE', $headers);
    }

    public function put($path, $deserializeTo = null, $body, array $headers =  array())
    {
        return $this->request($path, $deserializeTo, $body, 'PUT', $headers);
    }

    public function request($path, $deserializeTo = null, $body = null, $httpMethod = 'GET', array $headers = array(), array $options = array())
    {
        $serializer = SerializerBuilder::create()->build();
        if ($body != null) {
            $body = $serializer->serialize($body, 'json');
        }

        $authorization = 'Basic ' . base64_encode($this->apiKey . ':');
        $headers = array_merge($headers, ['Authorization' => $authorization]);

        $request = new Request($httpMethod, $path, $headers, $body);
        $response = $this->client->send($request);

        if ($deserializeTo != null) {
            $contents = $response->getBody()->getContents();

            if (is_array(json_decode($contents))) {
                $key = 'data';
                if ($deserializeTo == ResultResponse::class) {
                    $key = 'urls';
                }
                $contents = $this->addKeyToArray($key, $contents);
            }

            $response = $serializer->deserialize($contents, $deserializeTo, 'json');
        }

        $this->lastRequest = $request;
        $this->lastResponse = $response;

        return $response;
    }

    /**
     * @param string $key
     * @param array $array
     * @return null|array
     */
    private function addKeyToArray($key, $array)
    {
        $contents = json_decode($array);
        $contents = [$key => $contents];
        $contents = json_encode($contents);
        return $contents;
    }

    public function getLastRequest()
    {
        return $this->lastRequest;
    }

    public function getLastResponse()
    {
        return $this->lastResponse;
    }
}