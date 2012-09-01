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
     * @var decimal $adClientId
     *
     * @Column(name="ad_client_id", type="decimal", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_clientinfo_ad_client_id_seq", allocationSize="1", initialValue="1")
     */
    private $adClientId;

    /**
     * @var decimal $adOrgId
     *
     * @Column(name="ad_org_id", type="decimal", nullable=false)
     */
    private $adOrgId;

    /**
     * @var date $created
     *
     * @Column(name="created", type="date", nullable=false)
     */
    private $created;

    /**
     * @var decimal $createdby
     *
     * @Column(name="createdby", type="decimal", nullable=true)
     */
    private $createdby;

    /**
     * @var date $updated
     *
     * @Column(name="updated", type="date", nullable=false)
     */
    private $updated;

    /**
     * @var decimal $updatedby
     *
     * @Column(name="updatedby", type="decimal", nullable=true)
     */
    private $updatedby;

    /**
     * @var decimal $cAcctschema1Id
     *
     * @Column(name="c_acctschema1_id", type="decimal", nullable=true)
     */
    private $cAcctschema1Id;

    /**
     * @var decimal $cAcctschema2Id
     *
     * @Column(name="c_acctschema2_id", type="decimal", nullable=true)
     */
    private $cAcctschema2Id;

    /**
     * @var decimal $cAcctschema3Id
     *
     * @Column(name="c_acctschema3_id", type="decimal", nullable=true)
     */
    private $cAcctschema3Id;

    /**
     * @var decimal $mPricelistId
     *
     * @Column(name="m_pricelist_id", type="decimal", nullable=true)
     */
    private $mPricelistId;

    /**
     * @var decimal $keeplogdays
     *
     * @Column(name="keeplogdays", type="decimal", nullable=false)
     */
    private $keeplogdays;

    /**
     * @var AdClient
     *
     * @ManyToOne(targetEntity="AdClient")
     * @JoinColumns({
     *   @JoinColumn(name="ad_client_id", referencedColumnName="ad_client_id")
     * })
     */
    private $adClient;



    /**
     * Get adClientId
     *
     * @return decimal 
     */
    public function getAdClientId()
    {
        return $this->adClientId;
    }

    /**
     * Set adOrgId
     *
     * @param decimal $adOrgId
     */
    public function setAdOrgId($adOrgId)
    {
        $this->adOrgId = $adOrgId;
    }

    /**
     * Get adOrgId
     *
     * @return decimal 
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
     * @param decimal $createdby
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    }

    /**
     * Get createdby
     *
     * @return decimal 
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
     * @param decimal $updatedby
     */
    public function setUpdatedby($updatedby)
    {
        $this->updatedby = $updatedby;
    }

    /**
     * Get updatedby
     *
     * @return decimal 
     */
    public function getUpdatedby()
    {
        return $this->updatedby;
    }

    /**
     * Set cAcctschema1Id
     *
     * @param decimal $cAcctschema1Id
     */
    public function setCAcctschema1Id($cAcctschema1Id)
    {
        $this->cAcctschema1Id = $cAcctschema1Id;
    }

    /**
     * Get cAcctschema1Id
     *
     * @return decimal 
     */
    public function getCAcctschema1Id()
    {
        return $this->cAcctschema1Id;
    }

    /**
     * Set cAcctschema2Id
     *
     * @param decimal $cAcctschema2Id
     */
    public function setCAcctschema2Id($cAcctschema2Id)
    {
        $this->cAcctschema2Id = $cAcctschema2Id;
    }

    /**
     * Get cAcctschema2Id
     *
     * @return decimal 
     */
    public function getCAcctschema2Id()
    {
        return $this->cAcctschema2Id;
    }

    /**
     * Set cAcctschema3Id
     *
     * @param decimal $cAcctschema3Id
     */
    public function setCAcctschema3Id($cAcctschema3Id)
    {
        $this->cAcctschema3Id = $cAcctschema3Id;
    }

    /**
     * Get cAcctschema3Id
     *
     * @return decimal 
     */
    public function getCAcctschema3Id()
    {
        return $this->cAcctschema3Id;
    }

    /**
     * Set mPricelistId
     *
     * @param decimal $mPricelistId
     */
    public function setMPricelistId($mPricelistId)
    {
        $this->mPricelistId = $mPricelistId;
    }

    /**
     * Get mPricelistId
     *
     * @return decimal 
     */
    public function getMPricelistId()
    {
        return $this->mPricelistId;
    }

    /**
     * Set keeplogdays
     *
     * @param decimal $keeplogdays
     */
    public function setKeeplogdays($keeplogdays)
    {
        $this->keeplogdays = $keeplogdays;
    }

    /**
     * Get keeplogdays
     *
     * @return decimal 
     */
    public function getKeeplogdays()
    {
        return $this->keeplogdays;
    }

    /**
     * Set adClient
     *
     * @param AdClient $adClient
     */
    public function setAdClient(\AdClient $adClient)
    {
        $this->adClient = $adClient;
    }

    /**
     * Get adClient
     *
     * @return AdClient 
     */
    public function getAdClient()
    {
        return $this->adClient;
    }
}
