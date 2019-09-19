<?php

namespace Tests\Mangati\Cachet;

use Mangati\Cachet\Entity\Incident;

/**
 * Class IncidentsTest
 * @package Tests\Mangati\Cachet
 */
class IncidentsTest extends AbstractTest
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
        $result = $this->client->getIncidents();

        $this->assertTrue(is_array($result));
    }

    /**
     * testGetOne
     */
    public function testGetOne()
    {
        $result = $this->client->getIncident(1);

        $this->assertTrue($result instanceof Incident);
        $this->assertEquals(1, $result->getId());
    }

    /**
     * testPost
     */
    public function testPost()
    {
        $incident = new Incident();
        $incident->setName('Testing my client');
        $incident->setMessage('mangati/cachet Cachet client');
        $incident->setStatus(Incident::STATUS_WATCHING);

        $result = $this->client->addIncident($incident);

        $this->assertTrue($result instanceof Incident);
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
            $incident = new Incident();
            $incident->setId($this->id);
            $incident->setName('Testing my client (updated)');
            $incident->setMessage('mangati/cachet Cachet client');
            $incident->setStatus(Incident::STATUS_FIXED);

            $result = $this->client->updateIncident($incident);

            $this->assertTrue($result instanceof Incident);
            $this->assertTrue($result->getId() > 0);
            $this->assertEquals('Testing my client (updated)', $result->getName());
            $this->assertEquals(Incident::STATUS_FIXED, $result->getStatus());
        }
    }

    /**
     * testDelete
     */
    public function testDelete()
    {
        if ($this->id) {
            $result = $this->client->deleteIncident($this->id);

            $this->assertTrue($result);
        }
    }
}
