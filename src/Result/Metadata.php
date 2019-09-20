<?php

namespace DevoraliveCachet\Result;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Metadata
 * @package DevoraliveCachet\Result
 */
class Metadata
{

    /**
     * @var Pagination
     * @JMS\Type("DevoraliveCachet\Result\Pagination")
     */
    private $pagination;
}
