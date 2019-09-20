<?php

namespace Devoralive\Result\Metric;

use Devoralive\Result\Envelope;
use Devoralive\Entity\Metric;
use JMS\Serializer\Annotation as JMS;

/**
 * Class MetricEnvelope
 * @package Devoralive\Result\Metric
 */
class MetricEnvelope implements Envelope
{

    /**
     * @var Metric
     * @JMS\Type("Devoralive\Entity\Metric")
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
