<?php

namespace DevoraliveCachet\Result\Component;

use DevoraliveCachet\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ComponentsEnvelope
 * @package DevoraliveCachet\Result\Component
 */
class ComponentsEnvelope extends EnvelopeCollection
{

    /**
     * @var array
     * @JMS\Type("array<DevoraliveCachet\Entity\Component>")
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
