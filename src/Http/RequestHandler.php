<?php

namespace Devoralive\Http;

use Devoralive\Client as Client;
use \GuzzleHttp\Client as GuzzleClient;
use Devoralive\Entity\Entity;
use Devoralive\Result\Envelope;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class RequestHandler
 * @package Devoralive\Http
 */
class RequestHandler
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var array
     */
    private $headers;

    /**
     * @var
     */
    protected $serializer;

    /**
     * RequestHandler constructor.
     *
     * @param Client     $client
     * @param SerializerInterface $serializer
     */
    public function __construct(Client $client, SerializerInterface $serializer)
    {
        $this->client = new GuzzleClient([
            'base_uri' => $client->getEndpoint()
        ]);

        $this->headers = [
            'Content-type' => 'application/json',
            'X-Cachet-Token' => $client->getToken()
        ];

        $this->serializer = $serializer;
    }

    /**
     * @param ResponseInterface $response
     * @param $envelopeType
     *
     * @return Envelope
     */
    private function parseResponse(ResponseInterface $response, $envelopeType)
    {
        $json = $response->getBody();
        $envelope = $this->serializer->deserialize($json, $envelopeType, 'json');

        return $envelope;
    }

    /**
     * @param       $method
     * @param       $url
     * @param array $params
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request($method, $url, array $params = [])
    {
        $params = array_merge($params, [
            'headers' => $this->headers
        ]);
        return $this->client->request($method, $url, $params);
    }

    /**
     * @param       $path
     * @param       $envelopeType
     * @param array $params
     *
     * @return Envelope
     * @throws GuzzleException
     */
    public function get($path, $envelopeType, array $params = [])
    {
        $response = $this->request("GET", $path, [
            'query' => $params
        ]);
        $envelope = $this->parseResponse($response, $envelopeType);

        return $envelope;
    }

    /**
     * @param        $path
     * @param        $envelopeType
     * @param Entity $entity
     *
     * @return Envelope
     * @throws GuzzleException
     */
    public function put($path, $envelopeType, Entity $entity)
    {
        $data = $this->serializer->serialize($entity, 'json');
        $response = $this->request("PUT", $path, [
            'body' => $data
        ]);

        $envelope = $this->parseResponse($response, $envelopeType);

        return $envelope;
    }

    /**
     * @param        $path
     * @param        $envelopeType
     * @param Entity $entity
     *
     * @return Envelope
     * @throws GuzzleException
     */
    public function post($path, $envelopeType, Entity $entity)
    {
        $data = $this->serializer->serialize($entity, 'json');
        $response = $this->request("POST", $path, [
            'body' => $data
        ]);

        $envelope = $this->parseResponse($response, $envelopeType);

        return $envelope;
    }

    /**
     * @param $path
     * @param $id
     *
     * @throws GuzzleException
     */
    public function delete($path, $id)
    {
        $this->request("DELETE", $path, [
            'json' => [
                'id' => $id
            ]
        ]);
    }
}
