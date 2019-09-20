<?php

namespace DevoraliveCachet\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Metric
 * @package DevoraliveCachet\Entity
 */
class Metric extends Entity
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $name;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $suffix;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("default_value")
     */
    private $defaultValue;

    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("calc_type")
     */
    private $calcType;

    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("display_chart")
     */
    private $displayChart;

    /**
     * @var int
     * @JMS\Type("string")
     * @JMS\SerializedName("default_view_name")
     */
    private $defaultViewName;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Metric
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     *
     * @return Metric
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Metric
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     *
     * @return Metric
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * @return int
     */
    public function getCalcType()
    {
        return $this->calcType;
    }

    /**
     * @param int $calcType
     *
     * @return Metric
     */
    public function setCalcType($calcType)
    {
        $this->calcType = $calcType;

        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayChart()
    {
        return $this->displayChart;
    }

    /**
     * @param int $displayChart
     *
     * @return Metric
     */
    public function setDisplayChart($displayChart)
    {
        $this->displayChart = $displayChart;

        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultViewName()
    {
        return $this->defaultViewName;
    }

    /**
     * @param int $defaultViewName
     *
     * @return Metric
     */
    public function setDefaultViewName($defaultViewName)
    {
        $this->defaultViewName = $defaultViewName;

        return $this;
    }
}
