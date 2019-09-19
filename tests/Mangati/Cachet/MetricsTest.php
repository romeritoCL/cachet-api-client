<?php

namespace Tests\Mangati\Cachet;

use Mangati\Cachet\Entity\Metric;

/**
 * Class MetricsTest
 * @package Tests\Mangati\Cachet
 */
class MetricsTest extends AbstractTest
{
    /**
     * @var $id
     */
    private $id;

    /**
     * testGetAll
     */
    public function testGetAll()
    {
        $result = $this->client->getMetrics();

        $this->assertTrue(is_array($result));
    }

    /**
     * testGetOne
     */
    public function testGetOne()
    {
        /** @var Metric $result */
        $result = $this->client->getMetric(1);

        $this->assertTrue($result instanceof Metric);
        $this->assertEquals(1, $result->getId());
    }

    /**
     * testPost
     */
    public function testPost()
    {
        $metric = new Metric();
        $metric->setName('Testing my client');
        $metric->setDescription('mangati/cachet Cachet client');
        $metric->setDefaultValue(1);

        /** @var Metric $result */
        $result = $this->client->addMetric($metric);

        $this->assertTrue($result instanceof Metric);
        $this->assertTrue($result->getId() > 0);
        $this->assertEquals('Testing my client', $result->getName());

        $this->id = $result->getId();
    }

    /**
     * testPut
     */
    public function testPut()
    {
        if ($this->id) {
            $metric = new Metric();
            $metric->setId($this->id);
            $metric->setName('Testing my client (updated)');
            $metric->setDescription('mangati/cachet Cachet client');
            $metric->setDefaultValue(1);

            /** @var Metric $result */
            $result = $this->client->updateMetric($metric);

            $this->assertTrue($result instanceof Metric);
            $this->assertTrue($result->getId() > 0);
            $this->assertEquals('Testing my client (updated)', $result->getName());
            $this->assertEquals(1, $result->getDefaultValue());
        }
    }

    /**
     * testDelete
     */
    public function testDelete()
    {
        if ($this->id) {
            $result = $this->client->deleteMetric($this->id);

            $this->assertTrue($result);
        }
    }
}
