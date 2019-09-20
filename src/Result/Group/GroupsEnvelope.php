<?php

namespace DevoraliveCachet\Result\Group;

use DevoraliveCachet\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GroupsEnvelope
 * @package DevoraliveCachet\Result\Group
 */
class GroupsEnvelope extends EnvelopeCollection
{
    /**
     * @var array
     * @JMS\Type("array<DevoraliveCachet\Entity\Group>")
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
