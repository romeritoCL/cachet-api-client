<?php

namespace Devoralive\CachetApiClient\Tests;

use DevoraliveCachet\Client;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class ClientTest
 * @package Devoralive\Tests
 */
class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * setUp
     */
    public function setUp(): void
    {
        $this->client = new Client(getenv('CACHET_API_URL'), getenv('CACHET_API_TOKEN'));
        parent::setUp();
    }

    /**
     * testPing
     *
     * @throws GuzzleException
     */
    public function testPing()
    {
        $result = $this->client->ping();

        $this->assertEquals('Pong!', $result);
    }
}
