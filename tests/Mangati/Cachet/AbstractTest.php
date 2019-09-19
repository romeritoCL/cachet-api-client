<?php

namespace Tests\Mangati\Cachet;

use Mangati\Cachet\Client;
use PHPUnit_Framework_TestCase;

/**
 * AbstractTest
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
abstract class AbstractTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * setUp
     */
    protected function setUp()
    {
        $this->client = new Client('https://status.devoralive.com/api/v1/', 'TfWX9mbiDIIwklRY0AH3');
    }
}
