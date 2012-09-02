<?php

namespace models;

/**
 * AdClientinfo
 *
 * @Table(name="ad_clientinfo")
 * @Entity
 */
class AdClientinfo
{
    /**
     * @var integer $adClientinfoId
     *
     * @Column(name="ad_clientinfo_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_clientinfo_ad_clientinfo_id_seq", allocationSize="1", initialValue="1")
     */
    private $adClientinfoId;

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
     * @var integer $cAcctschema1Id
     *
     * @Column(name="c_acctschema1_id", type="integer", nullable=true)
     */
    private $cAcctschema1Id;

    /**
     * @var integer $cAcctschema2Id
     *
     * @Column(name="c_acctschema2_id", type="integer", nullable=true)
     */
    private $cAcctschema2Id;

    /**
     * @var integer $cAcctschema3Id
     *
     * @Column(name="c_acctschema3_id", type="integer", nullable=true)
     */
    private $cAcctschema3Id;

    /**
     * @var integer $mPricelistId
     *
     * @Column(name="m_pricelist_id", type="integer", nullable=true)
     */
    private $mPricelistId;

    /**
     * @var integer $keeplogdays
     *
     * @Column(name="keeplogdays", type="integer", nullable=false)
     */
    private $keeplogdays;



    /**
     * Get adClientinfoId
     *
     * @return integer 
     */
    public function getAdClientinfoId()
    {
        return $this->adClientinfoId;
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
     * Set cAcctschema1Id
     *
     * @param integer $cAcctschema1Id
     */
    public function setCAcctschema1Id($cAcctschema1Id)
    {
        $this->cAcctschema1Id = $cAcctschema1Id;
    }

    /**
     * Get cAcctschema1Id
     *
     * @return integer 
     */
    public function getCAcctschema1Id()
    {
        return $this->cAcctschema1Id;
    }

    /**
     * Set cAcctschema2Id
     *
     * @param integer $cAcctschema2Id
     */
    public function setCAcctschema2Id($cAcctschema2Id)
    {
        $this->cAcctschema2Id = $cAcctschema2Id;
    }

    /**
     * Get cAcctschema2Id
     *
     * @return integer 
     */
    public function getCAcctschema2Id()
    {
        return $this->cAcctschema2Id;
    }

    /**
     * Set cAcctschema3Id
     *
     * @param integer $cAcctschema3Id
     */
    public function setCAcctschema3Id($cAcctschema3Id)
    {
        $this->cAcctschema3Id = $cAcctschema3Id;
    }

    /**
     * Get cAcctschema3Id
     *
     * @return integer 
     */
    public function getCAcctschema3Id()
    {
        return $this->cAcctschema3Id;
    }

    /**
     * Set mPricelistId
     *
     * @param integer $mPricelistId
     */
    public function setMPricelistId($mPricelistId)
    {
        $this->mPricelistId = $mPricelistId;
    }

    /**
     * Get mPricelistId
     *
     * @return integer 
     */
    public function getMPricelistId()
    {
        return $this->mPricelistId;
    }

    /**
     * Set keeplogdays
     *
     * @param integer $keeplogdays
     */
    public function setKeeplogdays($keeplogdays)
    {
        $this->keeplogdays = $keeplogdays;
    }

    /**
     * Get keeplogdays
     *
     * @return integer 
     */
    public function getKeeplogdays()
    {
        return $this->keeplogdays;
    }
}