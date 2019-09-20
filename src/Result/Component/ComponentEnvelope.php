<?php

namespace DevoraliveCachet\Result\Component;

use DevoraliveCachet\Result\Envelope;
use DevoraliveCachet\Entity\Component;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ComponentEnvelope
 * @package DevoraliveCachet\Result\Component
 */
class ComponentEnvelope implements Envelope
{

    /**
     * @var Component
     * @JMS\Type("DevoraliveCachet\Entity\Component")
     */
    private $data;

    /**
     * Get the value of Data
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of Data
     *
     * @param mixed data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
