<?php

namespace Devoralive\Result;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Metadata
 * @package Devoralive\Result
 */
class Metadata
{

    /**
     * @var Pagination
     * @JMS\Type("Devoralive\Result\Pagination")
     */
    private $pagination;
}
