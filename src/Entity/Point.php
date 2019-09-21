<?php

namespace DevoraliveCachet\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Point
 * @package DevoraliveCachet\Entity
 */
class Point extends Entity
{
    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("metric_id")
     */
    protected $metricId;

    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("value")
     */
    protected $value;

    /**
     * @return int
     */
    public function getMetricId()
    {
        return $this->metricId;
    }

    /**
     * @param int $metricId
     *
     * @return Point
     */
    public function setMetricId($metricId)
    {
        $this->metricId = $metricId;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return Point
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
