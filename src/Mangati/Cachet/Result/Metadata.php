<?php

namespace Mangati\Cachet\Result;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Metadata
 * @package Mangati\Cachet\Result
 */
class Metadata
{

    /**
     * @var Pagination
     * @JMS\Type("Mangati\Cachet\Result\Pagination")
     */
    private $pagination;
}
