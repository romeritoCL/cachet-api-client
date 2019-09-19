<?php

namespace Mangati\Cachet\Result\Metric;

use Mangati\Cachet\Result\Envelope;
use Mangati\Cachet\Entity\Metric;
use JMS\Serializer\Annotation as JMS;

/**
 * Class MetricEnvelope
 * @package Mangati\Cachet\Result\Metric
 */
class MetricEnvelope implements Envelope
{

    /**
     * @var Metric
     * @JMS\Type("Mangati\Cachet\Entity\Metric")
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
