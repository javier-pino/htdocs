<?php



namespace models;

/**
 * AdRole
 *
 * @Table(name="ad_role")
 * @Entity
 */
class AdRole
{
    /**
     * @var decimal $adRoleId
     *
     * @Column(name="ad_role_id", type="decimal", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_role_ad_role_id_seq", allocationSize="1", initialValue="1")
     */
    private $adRoleId;

    /**
     * @var date $created
     *
     * @Column(name="created", type="date", nullable=false)
     */
    private $created;

    /**
     * @var decimal $createdby
     *
     * @Column(name="createdby", type="decimal", nullable=false)
     */
    private $createdby;

    /**
     * @var date $updated
     *
     * @Column(name="updated", type="date", nullable=false)
     */
    private $updated;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var decimal $updatedby
     *
     * @Column(name="updatedby", type="decimal", nullable=false)
     */
    private $updatedby;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var decimal $adTreeMenuId
     *
     * @Column(name="ad_tree_menu_id", type="decimal", nullable=true)
     */
    private $adTreeMenuId;

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
     * @var AdOrg
     *
     * @ManyToOne(targetEntity="AdOrg")
     * @JoinColumns({
     *   @JoinColumn(name="ad_org_id", referencedColumnName="ad_org_id")
     * })
     */
    private $adOrg;



    /**
     * Get adRoleId
     *
     * @return decimal 
     */
    public function getAdRoleId()
    {
        return $this->adRoleId;
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

    /**
     * Set adTreeMenuId
     *
     * @param decimal $adTreeMenuId
     */
    public function setAdTreeMenuId($adTreeMenuId)
    {
        $this->adTreeMenuId = $adTreeMenuId;
    }

    /**
     * Get adTreeMenuId
     *
     * @return decimal 
     */
    public function getAdTreeMenuId()
    {
        return $this->adTreeMenuId;
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

    /**
     * Set adOrg
     *
     * @param AdOrg $adOrg
     */
    public function setAdOrg(\AdOrg $adOrg)
    {
        $this->adOrg = $adOrg;
    }

    /**
     * Get adOrg
     *
     * @return AdOrg 
     */
    public function getAdOrg()
    {
        return $this->adOrg;
    }
}
