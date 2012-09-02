<?php

namespace models;

/**
 * AdUserRoles
 *
 * @Table(name="ad_user_roles")
 * @Entity
 */
class AdUserRoles
{
    /**
     * @var integer $adRoleId
     *
     * @Column(name="ad_role_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $adRoleId;

    /**
     * @var integer $adUserId
     *
     * @Column(name="ad_user_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $adUserId;

    /**
     * @var integer $adClientId
     *
     * @Column(name="ad_client_id", type="integer", nullable=false)
     */
    private $adClientId;

    /**
     * @var integer $adOrgId
     *
     * @Column(name="ad_org_id", type="integer", nullable=false)
     */
    private $adOrgId;

    /**
     * @var date $created
     *
     * @Column(name="created", type="date", nullable=false)
     */
    private $created;

    /**
     * @var integer $createdby
     *
     * @Column(name="createdby", type="integer", nullable=false)
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
     * @Column(name="updatedby", type="integer", nullable=false)
     */
    private $updatedby;



    /**
     * Set adRoleId
     *
     * @param integer $adRoleId
     */
    public function setAdRoleId($adRoleId)
    {
        $this->adRoleId = $adRoleId;
    }

    /**
     * Get adRoleId
     *
     * @return integer 
     */
    public function getAdRoleId()
    {
        return $this->adRoleId;
    }

    /**
     * Set adUserId
     *
     * @param integer $adUserId
     */
    public function setAdUserId($adUserId)
    {
        $this->adUserId = $adUserId;
    }

    /**
     * Get adUserId
     *
     * @return integer 
     */
    public function getAdUserId()
    {
        return $this->adUserId;
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
     * Set adOrgId
     *
     * @param integer $adOrgId
     */
    public function setAdOrgId($adOrgId)
    {
        $this->adOrgId = $adOrgId;
    }

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
}