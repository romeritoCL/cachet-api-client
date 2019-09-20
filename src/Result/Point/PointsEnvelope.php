<?php

namespace Devoralive\Result\Point;

use Devoralive\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class PointsEnvelope
 * @package Devoralive\Result\Point
 */
class PointsEnvelope extends EnvelopeCollection
{

    /**
     * @var array
     * @JMS\Type("array<Devoralive\Entity\Point>")
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
