<?php

namespace models;

/**
 * AdOrg
 *
 * @Table(name="ad_org")
 * @Entity
 */
class AdOrg
{
    /**
     * @var integer $adOrgId
     *
     * @Column(name="ad_org_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_org_ad_org_id_seq", allocationSize="1", initialValue="1")
     */
    private $adOrgId;

    /**
     * @var integer $adClientId
     *
     * @Column(name="ad_client_id", type="integer", nullable=true)
     */
    private $adClientId;

    /**
     * @var date $created
     *
     * @Column(name="created", type="date", nullable=false)
     */
    private $created;

    /**
     * @var integer $createdby
     *
     * @Column(name="createdby", type="integer", nullable=true)
     */
    private $createdby;

    /**
     * @var date $updated
     *
     * @Column(name="updated", type="date", nullable=false)
     */
    private $updated;

    /**
     * @var integer $updatedby
     *
     * @Column(name="updatedby", type="integer", nullable=true)
     */
    private $updatedby;

    /**
     * @var string $value
     *
     * @Column(name="value", type="string", length=40, nullable=false)
     */
    private $value;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;



    /**
     * Get adOrgId
     *
     * @return integer 
     */
    public function getAdOrgId()
    {
        return $this->adOrgId;
    }

    /**
     * Set adClientId
     *
     * @param integer $adClientId
     */
    public function setAdClientId($adClientId)
    {
        $this->adClientId = $adClientId;
    }

    /**
     * Get adClientId
     *
     * @return integer 
     */
    public function getAdClientId()
    {
        return $this->adClientId;
    }

    /**
     * Set created
     *
     * @param date $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return date 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdby
     *
     * @param integer $createdby
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    }

    /**
     * Get createdby
     *
     * @return integer 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set updated
     *
     * @param date $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return date 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set updatedby
     *
     * @param integer $updatedby
     */
    public function setUpdatedby($updatedby)
    {
        $this->updatedby = $updatedby;
    }

    /**
     * Get updatedby
     *
     * @return integer 
     */
    public function getUpdatedby()
    {
        return $this->updatedby;
    }

    /**
     * Set value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}