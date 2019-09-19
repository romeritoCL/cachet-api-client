<?php

namespace Tests\Mangati\Cachet;

/**
 * Class ClientTest
 * @package Tests\Mangati\Cachet
 */
class ClientTest extends AbstractTest
{
    /**
     * testPing
     */
    public function testPing()
    {
        $result = $this->client->ping();

        $this->assertEquals($result, "Pong!");
    }
}
