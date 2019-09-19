<?php

namespace Mangati\Cachet\Result\Incident;

use Mangati\Cachet\Result\Envelope;
use Mangati\Cachet\Entity\Incident;
use JMS\Serializer\Annotation as JMS;

class IncidentEnvelope implements Envelope
{
    /**
     * @var Incident
     * @JMS\Type("Mangati\Cachet\Entity\Incident")
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
