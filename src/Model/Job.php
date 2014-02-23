<?php

namespace Snide\Travis\Model;

/**
 * Class Job
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Job
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
    protected $buildId;

    /**
     * @var int
     */
    protected $commitId;

    /**
     * @var int
     */
    protected $logId;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var float
     */
    protected $number;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var \DateTime
     */
    protected $finishedAt;

    /**
     * @var string
     */
    protected $queue;

    /**
     * @var boolean
     */
    protected $allowFailure;

    /**
     * @var string
     */
    protected $tags;

    /**
     * @param boolean $allowFailure
     */
    public function setAllowFailure($allowFailure)
    {
        $this->allowFailure = $allowFailure;
    }

    /**
     * @return boolean
     */
    public function getAllowFailure()
    {
        return $this->allowFailure;
    }

    /**
     * @param int $buildId
     */
    public function setBuildId($buildId)
    {
        $this->buildId = $buildId;
    }

    /**
     * @return int
     */
    public function getBuildId()
    {
        return $this->buildId;
    }

    /**
     * @param int $commitId
     */
    public function setCommitId($commitId)
    {
        $this->commitId = $commitId;
    }

    /**
     * @return int
     */
    public function getCommitId()
    {
        return $this->commitId;
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
     * @param mixed $finishedAt
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
     * @param int $logId
     */
    public function setLogId($logId)
    {
        $this->logId = $logId;
    }

    /**
     * @return int
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * @param float $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $queue
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
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
     * @param mixed $startedAt
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
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }
}
