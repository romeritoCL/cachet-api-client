<?php

namespace Devoralive\Result\Incident;

use Devoralive\Result\Envelope;
use Devoralive\Entity\Incident;
use JMS\Serializer\Annotation as JMS;

class IncidentEnvelope implements Envelope
{
    /**
     * @var Incident
     * @JMS\Type("Devoralive\Entity\Incident")
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
