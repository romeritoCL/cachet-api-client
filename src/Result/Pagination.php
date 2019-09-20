<?php

namespace Devoralive\Result;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Pagination
 * @package Devoralive\Result
 */
class Pagination
{

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $total;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $count;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $perPage;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $currentPage;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $totalPages;

    /**
     * @var array
     * @JMS\Type("array<string, string>")
     */
    private $links;
}
