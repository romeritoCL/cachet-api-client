<?php

namespace Devoralive\Result\Group;

use Devoralive\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GroupsEnvelope
 * @package Devoralive\Result\Group
 */
class GroupsEnvelope extends EnvelopeCollection
{
    /**
     * @var array
     * @JMS\Type("array<Devoralive\Entity\Group>")
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
