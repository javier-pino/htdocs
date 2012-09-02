<?php

namespace models;

/**
 * AdSession
 *
 * @Table(name="ad_session")
 * @Entity
 */
class AdSession
{
    /**
     * @var integer $adSessionId
     *
     * @Column(name="ad_session_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_session_ad_session_id_seq", allocationSize="1", initialValue="1")
     */
    private $adSessionId;

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
     * @var string $websession
     *
     * @Column(name="websession", type="string", length=40, nullable=true)
     */
    private $websession;

    /**
     * @var string $remoteAddr
     *
     * @Column(name="remote_addr", type="string", length=60, nullable=true)
     */
    private $remoteAddr;

    /**
     * @var string $remoteHost
     *
     * @Column(name="remote_host", type="string", length=120, nullable=true)
     */
    private $remoteHost;



    /**
     * Get adSessionId
     *
     * @return integer 
     */
    public function getAdSessionId()
    {
        return $this->adSessionId;
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

    /**
     * Set websession
     *
     * @param string $websession
     */
    public function setWebsession($websession)
    {
        $this->websession = $websession;
    }

    /**
     * Get websession
     *
     * @return string 
     */
    public function getWebsession()
    {
        return $this->websession;
    }

    /**
     * Set remoteAddr
     *
     * @param string $remoteAddr
     */
    public function setRemoteAddr($remoteAddr)
    {
        $this->remoteAddr = $remoteAddr;
    }

    /**
     * Get remoteAddr
     *
     * @return string 
     */
    public function getRemoteAddr()
    {
        return $this->remoteAddr;
    }

    /**
     * Set remoteHost
     *
     * @param string $remoteHost
     */
    public function setRemoteHost($remoteHost)
    {
        $this->remoteHost = $remoteHost;
    }

    /**
     * Get remoteHost
     *
     * @return string 
     */
    public function getRemoteHost()
    {
        return $this->remoteHost;
    }
}