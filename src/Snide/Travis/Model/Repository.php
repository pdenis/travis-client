<?php

namespace Snide\Travis\Model;

/**
 * Class Repository
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Repository
{
    /**
     * ID
     * @var int
     */
    protected $id;

    /**
     * Repo slug
     * @var string
     */
    protected $slug;

    /**
     * Description
     *
     * @var string
     */
    protected $description;

    /**
     * Last Build ID
     *
     * @var int
     */
    protected $lastBuildId;

    /**
     * Last Build number
     *
     * @var int
     */
    protected $lastBuildNumber;

    /**
     * Last Build state
     *
     * @var string
     */
    protected $lastBuildState;

    /**
     * Last build duration
     *
     * @var int
     */
    protected $lastBuildDuration;

    /**
     * Last build language
     *
     * @var string
     */
    protected $lastBuildLanguage;

    /**
     * Last build started date
     *
     * @var \DateTime
     */
    protected $lastBuildStartedAt;

    /**
     * Last build finished date
     * @var
     */
    protected $lastBuildFinishedAt;

    /**
     * @var array
     */
    protected $builds;

    /**
     * Constructor
     *
     * @param string $slug
     */
    public function __construct($slug = '')
    {
        if ($slug) {
            $this->slug = $slug;
        }
    }

    /**
     * Add build to the list
     *
     * @param Build $build
     */
    public function addBuild(Build $build)
    {
        $this->getBuilds();
        $build->setRepositoryId($this->getId());
        $this->builds[$build->getId()] = $build;
    }

    /**
     * Remove build from the list
     *
     * @param Build $build
     */
    public function removeBuild(Build $build)
    {
        if (isset($this->builds[$build->getId()])) {
            unset($this->builds[$build->getId()]);
        }
    }

    /**
     * Get builds
     *
     * @return array
     */
    public function getBuilds()
    {
        if (!is_array($this->builds)) {
            $this->builds = array();
        }

        return $this->builds;
    }

    /**
     * Set builds
     *
     * @param array $builds
     */
    public function setBuilds(array $builds = array())
    {
        $this->builds = $builds;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param int $lastBuildDuration
     */
    public function setLastBuildDuration($lastBuildDuration)
    {
        $this->lastBuildDuration = $lastBuildDuration;
    }

    /**
     * @return int
     */
    public function getLastBuildDuration()
    {
        return $this->lastBuildDuration;
    }

    /**
     * @param mixed $lastBuildFinishedAt
     */
    public function setLastBuildFinishedAt($lastBuildFinishedAt)
    {
        if (!is_object($lastBuildFinishedAt)) {
            $this->lastBuildStartedAt = new \DateTime($lastBuildFinishedAt);
        } else {
            $this->lastBuildStartedAt = $lastBuildFinishedAt;
        }
    }

    /**
     * @return mixed
     */
    public function getLastBuildFinishedAt()
    {
        return $this->lastBuildFinishedAt;
    }

    /**
     * @param int $lastBuildId
     */
    public function setLastBuildId($lastBuildId)
    {
        $this->lastBuildId = $lastBuildId;
    }

    /**
     * @return int
     */
    public function getLastBuildId()
    {
        return $this->lastBuildId;
    }

    /**
     * @param string $lastBuildLanguage
     */
    public function setLastBuildLanguage($lastBuildLanguage)
    {
        $this->lastBuildLanguage = $lastBuildLanguage;
    }

    /**
     * @return string
     */
    public function getLastBuildLanguage()
    {
        return $this->lastBuildLanguage;
    }

    /**
     * @param int $lastBuildNumber
     */
    public function setLastBuildNumber($lastBuildNumber)
    {
        $this->lastBuildNumber = $lastBuildNumber;
    }

    /**
     * @return int
     */
    public function getLastBuildNumber()
    {
        return $this->lastBuildNumber;
    }

    /**
     * @param mixed $lastBuildStartedAt
     */
    public function setLastBuildStartedAt($lastBuildStartedAt)
    {
        if (!is_object($lastBuildStartedAt)) {
            $this->lastBuildStartedAt = new \DateTime($lastBuildStartedAt);
        } else {
            $this->lastBuildStartedAt = $lastBuildStartedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getLastBuildStartedAt()
    {
        return $this->lastBuildStartedAt;
    }

    /**
     * @param string $lastBuildState
     */
    public function setLastBuildState($lastBuildState)
    {
        $this->lastBuildState = $lastBuildState;
    }

    /**
     * @return string
     */
    public function getLastBuildState()
    {
        return $this->lastBuildState;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
