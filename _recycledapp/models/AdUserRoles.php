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
     * @var decimal $adRoleId
     *
     * @Column(name="ad_role_id", type="decimal", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $adRoleId;

    /**
     * @var decimal $adUserId
     *
     * @Column(name="ad_user_id", type="decimal", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $adUserId;

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
     * @var decimal $updatedby
     *
     * @Column(name="updatedby", type="decimal", nullable=false)
     */
    private $updatedby;

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
     * @var AdRole
     *
     * @ManyToOne(targetEntity="AdRole")
     * @JoinColumns({
     *   @JoinColumn(name="ad_role_id", referencedColumnName="ad_role_id")
     * })
     */
    private $adRole;

    /**
     * @var AdUser
     *
     * @ManyToOne(targetEntity="AdUser")
     * @JoinColumns({
     *   @JoinColumn(name="ad_user_id", referencedColumnName="ad_user_id")
     * })
     */
    private $adUser;



    /**
     * Set adRoleId
     *
     * @param decimal $adRoleId
     */
    public function setAdRoleId($adRoleId)
    {
        $this->adRoleId = $adRoleId;
    }

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
     * Set adUserId
     *
     * @param decimal $adUserId
     */
    public function setAdUserId($adUserId)
    {
        $this->adUserId = $adUserId;
    }

    /**
     * Get adUserId
     *
     * @return decimal 
     */
    public function getAdUserId()
    {
        return $this->adUserId;
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

    /**
     * Set adRole
     *
     * @param AdRole $adRole
     */
    public function setAdRole(\AdRole $adRole)
    {
        $this->adRole = $adRole;
    }

    /**
     * Get adRole
     *
     * @return AdRole 
     */
    public function getAdRole()
    {
        return $this->adRole;
    }

    /**
     * Set adUser
     *
     * @param AdUser $adUser
     */
    public function setAdUser(\AdUser $adUser)
    {
        $this->adUser = $adUser;
    }

    /**
     * Get adUser
     *
     * @return AdUser 
     */
    public function getAdUser()
    {
        return $this->adUser;
    }
}
