<?php


namespace models;

/**
 * Ask
 *
 * @Table(name="ask")
 * @Entity
 */
class Ask
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $userId
     *
     * @Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer $teamId
     *
     * @Column(name="team_id", type="integer", nullable=false)
     */
    private $teamId;

    /**
     * @var integer $cityId
     *
     * @Column(name="city_id", type="integer", nullable=false)
     */
    private $cityId;

    /**
     * @var text $content
     *
     * @Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var text $comment
     *
     * @Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer $createTime
     *
     * @Column(name="create_time", type="integer", nullable=false)
     */
    private $createTime;



    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    /**
     * Get createTime
     *
     * @return integer 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }
}