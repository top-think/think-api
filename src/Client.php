<?php

namespace think\api;

use GuzzleHttp\HandlerStack;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

/**
 * Class Client
 * @package think\api
 */
abstract class Client
{
    protected $endpoint = "https://api.topthink.com";

    protected $baseUri;

    protected $appCode;

    protected $handleStack;

    public function __construct($appCode, $handler = null)
    {
        $this->appCode     = $appCode;
        $this->handleStack = HandlerStack::create($handler);
    }

    public function request(string $method, $uri = '', array $options = [])
    {
        $client = $this->createHttpClient();

        $response = $client->request($method, $uri, $options);

        return $this->parseResponse($response);
    }

    public function parseResponse(ResponseInterface $response)
    {
        $result = $response->getBody()->getContents();

        if (false !== strpos($response->getHeaderLine('Content-Type'), 'application/json')) {
            $result = json_decode($result, true);
        }

        return $result;
    }

    public function createHttpClient()
    {
        return new \GuzzleHttp\Client([
            'base_uri' => $this->endpoint . $this->baseUri,
            'handler'  => $this->handleStack,
            'headers'  => [
                'Authorization' => "AppCode {$this->appCode}",
                'User-Agent'    => "ThinkApi/1.0",
            ],
            'verify'   => false,
        ]);
    }

    protected function getRequestClass($method)
    {
        $refClass  = new ReflectionClass($this);
        $className = ucfirst($method);
        return "{$refClass->getNamespaceName()}\\$className";
    }

    public function __call($method, $params)
    {
        $reqClass = $this->getRequestClass($method);

        if (class_exists($reqClass)) {
            return new $reqClass($this, ...$params);
        }

        throw new InvalidArgumentException("Api {$method} not found!");
    }
}
