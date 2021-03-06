<?php

namespace DevoraliveCachet\Result\Point;

use DevoraliveCachet\Result\Envelope;
use DevoraliveCachet\Entity\Point;
use JMS\Serializer\Annotation as JMS;

/**
 * Class PointEnvelope
 * @package DevoraliveCachet\Result\Point
 */
class PointEnvelope implements Envelope
{

    /**
     * @var Point
     * @JMS\Type("DevoraliveCachet\Entity\Point")
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
