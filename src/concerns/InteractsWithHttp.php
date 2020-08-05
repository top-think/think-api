<?php

namespace think\api\concerns;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

trait InteractsWithHttp
{
    protected $endpoint = "https://api.topthink.com/";

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

    protected function parseResponse(ResponseInterface $response)
    {
        $result = $response->getBody()->getContents();

        if (false !== strpos($response->getHeaderLine('Content-Type'), 'application/json')) {
            $result = json_decode($result, true);
        }

        return $result;
    }

    protected function createHttpClient()
    {
        return new Client([
            'base_uri' => $this->endpoint,
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
        return "{$refClass->getNamespaceName()}\\request\\$className";
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
