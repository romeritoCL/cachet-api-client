<?php

namespace Devoralive\Result\Component;

use Devoralive\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ComponentsEnvelope
 * @package Devoralive\Result\Component
 */
class ComponentsEnvelope extends EnvelopeCollection
{

    /**
     * @var array
     * @JMS\Type("array<Devoralive\Entity\Component>")
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
