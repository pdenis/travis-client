<?php

namespace Snide\Travis\Model;

/**
 * Class Build
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Build
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $repositoryId;

    /**
     * @var int
     */
    protected $commit;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var boolean
     */
    protected $pullRequest;

    /**
     * @var string
     */
    protected $pullRequestTitle;

    /**
     * @var int
     */
    protected $pullRequestNumber;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var boolean
     */
    protected $state;

    /**
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * @var \DateTime
     */
    protected $finishedAt;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var array
     */
    protected $jobIds;

    /**
     * @var int
     */
    protected $result;

    /**
     * @var string
     */
    protected $eventType;

    /**
     * @var string
     */
    protected $branch;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $branch
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param int $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * @param int $commit
     */
    public function setCommit($commit)
    {
        $this->commit = $commit;
    }

    /**
     * @return int
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param \DateTime $finishedAt
     */
    public function setFinishedAt($finishedAt)
    {
        if (!is_object($finishedAt)) {
            $this->finishedAt = new \DateTime($finishedAt);
        } else {
            $this->finishedAt = $finishedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $jobIds
     */
    public function setJobIds($jobIds)
    {
        $this->jobIds = $jobIds;
    }

    /**
     * @return array
     */
    public function getJobIds()
    {
        return $this->jobIds;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param boolean $pullRequest
     */
    public function setPullRequest($pullRequest)
    {
        $this->pullRequest = $pullRequest;
    }

    /**
     * @return boolean
     */
    public function getPullRequest()
    {
        return $this->pullRequest;
    }

    /**
     * @param int $pullRequestNumber
     */
    public function setPullRequestNumber($pullRequestNumber)
    {
        $this->pullRequestNumber = $pullRequestNumber;
    }

    /**
     * @return int
     */
    public function getPullRequestNumber()
    {
        return $this->pullRequestNumber;
    }

    /**
     * @param string $pullRequestTitle
     */
    public function setPullRequestTitle($pullRequestTitle)
    {
        $this->pullRequestTitle = $pullRequestTitle;
    }

    /**
     * @return string
     */
    public function getPullRequestTitle()
    {
        return $this->pullRequestTitle;
    }

    /**
     * @param int $repositoryId
     */
    public function setRepositoryId($repositoryId)
    {
        $this->repositoryId = $repositoryId;
    }

    /**
     * @return int
     */
    public function getRepositoryId()
    {
        return $this->repositoryId;
    }

    /**
     * @param \DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        if (!is_object($startedAt)) {
            $this->startedAt = new \DateTime($startedAt);
        } else {
            $this->startedAt = $startedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param boolean $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }
}
