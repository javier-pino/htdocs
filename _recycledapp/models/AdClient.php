<?php

namespace models;

/**
 * AdClient
 *
 * @Table(name="ad_client")
 * @Entity
 */
class AdClient
{
    /**
     * @var decimal $adClientId
     *
     * @Column(name="ad_client_id", type="decimal", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_client_ad_client_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $smtphost
     *
     * @Column(name="smtphost", type="string", length=60, nullable=true)
     */
    private $smtphost;

    /**
     * @var string $requestemail
     *
     * @Column(name="requestemail", type="string", length=60, nullable=true)
     */
    private $requestemail;

    /**
     * @var string $requestuser
     *
     * @Column(name="requestuser", type="string", length=20, nullable=true)
     */
    private $requestuser;

    /**
     * @var string $requestuserpw
     *
     * @Column(name="requestuserpw", type="string", length=20, nullable=true)
     */
    private $requestuserpw;

    /**
     * @var string $requestfolder
     *
     * @Column(name="requestfolder", type="string", length=20, nullable=true)
     */
    private $requestfolder;

    /**
     * @var string $webdir
     *
     * @Column(name="webdir", type="string", length=60, nullable=true)
     */
    private $webdir;

    /**
     * @var string $documentdir
     *
     * @Column(name="documentdir", type="string", length=60, nullable=true)
     */
    private $documentdir;

    /**
     * @var string $encryptionkey
     *
     * @Column(name="encryptionkey", type="string", length=255, nullable=true)
     */
    private $encryptionkey;



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

    /**
     * Set smtphost
     *
     * @param string $smtphost
     */
    public function setSmtphost($smtphost)
    {
        $this->smtphost = $smtphost;
    }

    /**
     * Get smtphost
     *
     * @return string 
     */
    public function getSmtphost()
    {
        return $this->smtphost;
    }

    /**
     * Set requestemail
     *
     * @param string $requestemail
     */
    public function setRequestemail($requestemail)
    {
        $this->requestemail = $requestemail;
    }

    /**
     * Get requestemail
     *
     * @return string 
     */
    public function getRequestemail()
    {
        return $this->requestemail;
    }

    /**
     * Set requestuser
     *
     * @param string $requestuser
     */
    public function setRequestuser($requestuser)
    {
        $this->requestuser = $requestuser;
    }

    /**
     * Get requestuser
     *
     * @return string 
     */
    public function getRequestuser()
    {
        return $this->requestuser;
    }

    /**
     * Set requestuserpw
     *
     * @param string $requestuserpw
     */
    public function setRequestuserpw($requestuserpw)
    {
        $this->requestuserpw = $requestuserpw;
    }

    /**
     * Get requestuserpw
     *
     * @return string 
     */
    public function getRequestuserpw()
    {
        return $this->requestuserpw;
    }

    /**
     * Set requestfolder
     *
     * @param string $requestfolder
     */
    public function setRequestfolder($requestfolder)
    {
        $this->requestfolder = $requestfolder;
    }

    /**
     * Get requestfolder
     *
     * @return string 
     */
    public function getRequestfolder()
    {
        return $this->requestfolder;
    }

    /**
     * Set webdir
     *
     * @param string $webdir
     */
    public function setWebdir($webdir)
    {
        $this->webdir = $webdir;
    }

    /**
     * Get webdir
     *
     * @return string 
     */
    public function getWebdir()
    {
        return $this->webdir;
    }

    /**
     * Set documentdir
     *
     * @param string $documentdir
     */
    public function setDocumentdir($documentdir)
    {
        $this->documentdir = $documentdir;
    }

    /**
     * Get documentdir
     *
     * @return string 
     */
    public function getDocumentdir()
    {
        return $this->documentdir;
    }

    /**
     * Set encryptionkey
     *
     * @param string $encryptionkey
     */
    public function setEncryptionkey($encryptionkey)
    {
        $this->encryptionkey = $encryptionkey;
    }

    /**
     * Get encryptionkey
     *
     * @return string 
     */
    public function getEncryptionkey()
    {
        return $this->encryptionkey;
    }
}
