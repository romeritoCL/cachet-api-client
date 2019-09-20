<?php

namespace DevoraliveCachet\Entity;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Entity
 * @package DevoraliveCachet\Entity
 */
abstract class Entity
{
    /**
     * @var int
     * @JMS\Type("int")
     */
    private $id;

    /**
     * @var DateTime
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("created_at")
     */
    private $createdAt;

    /**
     * @var DateTime
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("updated_at")
     */
    private $updatedAt;

    /**
     * @var DateTime
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("deleted_at")
     */
    private $deletedAt;


    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param int id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Created At
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of Created At
     *
     * @param DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of Updated At
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of Updated At
     *
     * @param DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get the value of Deleted At
     *
     * @return DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set the value of Deleted At
     *
     * @param DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
}
