<?php

namespace Tests\Mangati\Cachet;

use Mangati\Cachet\Entity\Component;

/**
 * Class ComponentsTest
 * @package Tests\Mangati\Cachet
 */
class ComponentsTest extends AbstractTest
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
        $result = $this->client->getComponents();

        $this->assertTrue(is_array($result));
    }

    /**
     * testGetOne
     */
    public function testGetOne()
    {
        $result = $this->client->getComponent(1);

        $this->assertTrue($result instanceof Component);
        $this->assertEquals(1, $result->getId());
    }

    /**
     * testPost
     */
    public function testPost()
    {
        $component = new Component();
        $component->setName('Testing my client');
        $component->setDescription('mangati/cachet Cachet client');
        $component->setLink('https://github.com/mangati/cachet');
        $component->setStatus(Component::STATUS_OPERATIONAL);

        $result = $this->client->addComponent($component);

        $this->assertTrue($result instanceof Component);
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
            $component = new Component();
            $component->setId($this->id);
            $component->setName('Testing my client (updated)');
            $component->setDescription('mangati/cachet Cachet client');
            $component->setLink('https://github.com/mangati/cachet');
            $component->setStatus(Component::STATUS_OPERATIONAL);

            $result = $this->client->updateComponent($component);

            $this->assertTrue($result instanceof Component);
            $this->assertTrue($result->getId() > 0);
            $this->assertEquals('Testing my client (updated)', $result->getName());
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
