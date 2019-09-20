<?php

namespace DevoraliveCachet\Result\Incident;

use DevoraliveCachet\Result\Envelope;
use DevoraliveCachet\Entity\Incident;
use JMS\Serializer\Annotation as JMS;

class IncidentEnvelope implements Envelope
{
    /**
     * @var Incident
     * @JMS\Type("DevoraliveCachet\Entity\Incident")
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
