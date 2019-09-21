<?php

namespace DevoraliveCachet\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Group
 * @package DevoraliveCachet\Entity
 */
class Group extends Entity
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * @var int
     * @JMS\Type("int")
     */
    protected $order;

    /**
     * @var int
     * @JMS\Type("boolean")
     */
    protected $collapsed;

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the value of Order
     *
     * @param int order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get the value of Collapsed
     *
     * @return int
     */
    public function getCollapsed()
    {
        return $this->collapsed;
    }

    /**
     * Set the value of Collapsed
     *
     * @param int collapsed
     *
     * @return self
     */
    public function setCollapsed($collapsed)
    {
        $this->collapsed = $collapsed;

        return $this;
    }
}
