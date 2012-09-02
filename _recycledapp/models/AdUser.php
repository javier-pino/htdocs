<?php

namespace models;

/**
 * AdUser
 *
 * @Table(name="ad_user")
 * @Entity
 */
class AdUser
{
    /**
     * @var integer $adUserId
     *
     * @Column(name="ad_user_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ad_user_ad_user_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $name
     *
     * @Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string $title
     *
     * @Column(name="title", type="string", length=40, nullable=false)
     */
    private $title;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $comments
     *
     * @Column(name="comments", type="string", length=2000, nullable=true)
     */
    private $comments;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=40, nullable=false)
     */
    private $password;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var string $emailverify
     *
     * @Column(name="emailverify", type="string", length=40, nullable=true)
     */
    private $emailverify;

    /**
     * @var string $phone
     *
     * @Column(name="phone", type="string", length=40, nullable=true)
     */
    private $phone;

    /**
     * @var string $phone2
     *
     * @Column(name="phone2", type="string", length=40, nullable=true)
     */
    private $phone2;

    /**
     * @var string $emailuser
     *
     * @Column(name="emailuser", type="string", length=20, nullable=true)
     */
    private $emailuser;

    /**
     * @var string $emailuserpw
     *
     * @Column(name="emailuserpw", type="string", length=20, nullable=true)
     */
    private $emailuserpw;

    /**
     * @var date $birthday
     *
     * @Column(name="birthday", type="date", nullable=false)
     */
    private $birthday;

    /**
     * @var integer $supervisorId
     *
     * @Column(name="supervisor_id", type="integer", nullable=true)
     */
    private $supervisorId;

    /**
     * @var date $lastcontact
     *
     * @Column(name="lastcontact", type="date", nullable=false)
     */
    private $lastcontact;

    /**
     * @var string $lastresult
     *
     * @Column(name="lastresult", type="string", length=255, nullable=true)
     */
    private $lastresult;

    /**
     * @var string $processing
     *
     * @Column(name="processing", type="string", nullable=true)
     */
    private $processing;



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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set comments
     *
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailverify
     *
     * @param string $emailverify
     */
    public function setEmailverify($emailverify)
    {
        $this->emailverify = $emailverify;
    }

    /**
     * Get emailverify
     *
     * @return string 
     */
    public function getEmailverify()
    {
        return $this->emailverify;
    }

    /**
     * Set phone
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set emailuser
     *
     * @param string $emailuser
     */
    public function setEmailuser($emailuser)
    {
        $this->emailuser = $emailuser;
    }

    /**
     * Get emailuser
     *
     * @return string 
     */
    public function getEmailuser()
    {
        return $this->emailuser;
    }

    /**
     * Set emailuserpw
     *
     * @param string $emailuserpw
     */
    public function setEmailuserpw($emailuserpw)
    {
        $this->emailuserpw = $emailuserpw;
    }

    /**
     * Get emailuserpw
     *
     * @return string 
     */
    public function getEmailuserpw()
    {
        return $this->emailuserpw;
    }

    /**
     * Set birthday
     *
     * @param date $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return date 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set supervisorId
     *
     * @param integer $supervisorId
     */
    public function setSupervisorId($supervisorId)
    {
        $this->supervisorId = $supervisorId;
    }

    /**
     * Get supervisorId
     *
     * @return integer 
     */
    public function getSupervisorId()
    {
        return $this->supervisorId;
    }

    /**
     * Set lastcontact
     *
     * @param date $lastcontact
     */
    public function setLastcontact($lastcontact)
    {
        $this->lastcontact = $lastcontact;
    }

    /**
     * Get lastcontact
     *
     * @return date 
     */
    public function getLastcontact()
    {
        return $this->lastcontact;
    }

    /**
     * Set lastresult
     *
     * @param string $lastresult
     */
    public function setLastresult($lastresult)
    {
        $this->lastresult = $lastresult;
    }

    /**
     * Get lastresult
     *
     * @return string 
     */
    public function getLastresult()
    {
        return $this->lastresult;
    }

    /**
     * Set processing
     *
     * @param string $processing
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;
    }

    /**
     * Get processing
     *
     * @return string 
     */
    public function getProcessing()
    {
        return $this->processing;
    }
}