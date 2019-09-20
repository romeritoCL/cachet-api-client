<?php

namespace Devoralive\Result\Incident;

use Devoralive\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class IncidentsEnvelope
 * @package Devoralive\Result\Incident
 */
class IncidentsEnvelope extends EnvelopeCollection
{
    /**
     * @var array
     * @JMS\Type("array<Devoralive\Entity\Incident>")
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
