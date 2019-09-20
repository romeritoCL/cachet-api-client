<?php

namespace Devoralive\Result;

use JMS\Serializer\Annotation as JMS;

/**
 * Class EnvelopeCollection
 * @package Devoralive\Result
 */
abstract class EnvelopeCollection implements Envelope
{

    /**
     * @var Metadata
     * @JMS\Type("Devoralive\Result\Metadata")
     */
    private $meta;

    /**
     * Get the value of Meta
     *
     * @return Metadata
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set the value of Meta
     *
     * @param Metadata meta
     *
     * @return self
     */
    public function setMeta(Metadata $meta)
    {
        $this->meta = $meta;

        return $this;
    }
}
