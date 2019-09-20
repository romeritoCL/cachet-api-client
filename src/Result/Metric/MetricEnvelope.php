<?php

namespace DevoraliveCachet\Result\Metric;

use DevoraliveCachet\Result\Envelope;
use DevoraliveCachet\Entity\Metric;
use JMS\Serializer\Annotation as JMS;

/**
 * Class MetricEnvelope
 * @package DevoraliveCachet\Result\Metric
 */
class MetricEnvelope implements Envelope
{

    /**
     * @var Metric
     * @JMS\Type("DevoraliveCachet\Entity\Metric")
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
