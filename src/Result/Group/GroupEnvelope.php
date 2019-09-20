<?php

namespace Devoralive\Result\Group;

use Devoralive\Result\Envelope;
use Devoralive\Entity\Group;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GroupEnvelope
 * @package Devoralive\Result\Group
 */
class GroupEnvelope implements Envelope
{

    /**
     * @var Group
     * @JMS\Type("Devoralive\Entity\Group")
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
