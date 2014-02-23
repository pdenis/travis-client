<?php

/*
 * This file is part of the Snide travis-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Travis\Model;

/**
 * Class Commit
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Commit
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $branch;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var \DateTime
     */
    protected $committedAt;

    /**
     * @var string
     */
    protected $authorName;

    /**
     * @var string
     */
    protected $authorEmail;

    /**
     * @var string
     */
    protected $committerName;

    /**
     * @var string
     */
    protected $committerEmail;

    /**
     * @var string
     */
    protected $compareUrl;

    /**
     * @var int
     */
    protected $pullRequestNumber;

    /**
     * @param string $authorEmail
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }

    /**
     * @param string $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

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
     * @param \DateTime $committedAt
     */
    public function setCommittedAt($committedAt)
    {
        if (!is_object($committedAt)) {
            $this->committedAt = new \DateTime($committedAt);
        } else {
            $this->committedAt = $committedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getCommittedAt()
    {
        return $this->committedAt;
    }

    /**
     * @param string $committerEmail
     */
    public function setCommitterEmail($committerEmail)
    {
        $this->committerEmail = $committerEmail;
    }

    /**
     * @return string
     */
    public function getCommitterEmail()
    {
        return $this->committerEmail;
    }

    /**
     * @param string $committerName
     */
    public function setCommitterName($committerName)
    {
        $this->committerName = $committerName;
    }

    /**
     * @return string
     */
    public function getCommitterName()
    {
        return $this->committerName;
    }

    /**
     * @param string $compareUrl
     */
    public function setCompareUrl($compareUrl)
    {
        $this->compareUrl = $compareUrl;
    }

    /**
     * @return string
     */
    public function getCompareUrl()
    {
        return $this->compareUrl;
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
     * @param string $sha
     */
    public function setSha($sha)
    {
        $this->sha = $sha;
    }

    /**
     * @return string
     */
    public function getSha()
    {
        return $this->sha;
    }

}
