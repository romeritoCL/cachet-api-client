<?php

namespace Mangati\Cachet\Result\Point;

use Mangati\Cachet\Result\Envelope;
use Mangati\Cachet\Entity\Point;
use JMS\Serializer\Annotation as JMS;

/**
 * Class PointEnvelope
 * @package Mangati\Cachet\Result\Point
 */
class PointEnvelope implements Envelope
{

    /**
     * @var Point
     * @JMS\Type("Mangati\Cachet\Entity\Point")
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
