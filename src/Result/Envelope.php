<?php

namespace DevoraliveCachet\Result;

/**
 * Interface Envelope
 * @package DevoraliveCachet\Result
 */
interface Envelope
{

    /**
     * Get the value of Data
     *
     * @return mixed
     */
    public function getData();

    /**
     * Set the value of Data
     *
     * @param mixed data
     *
     * @return self
     */
    public function setData($data);
}
