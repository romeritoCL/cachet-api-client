<?php

namespace Devoralive\Result\Component;

use Devoralive\Result\Envelope;
use Devoralive\Entity\Component;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ComponentEnvelope
 * @package Devoralive\Result\Component
 */
class ComponentEnvelope implements Envelope
{

    /**
     * @var Component
     * @JMS\Type("Devoralive\Entity\Component")
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
