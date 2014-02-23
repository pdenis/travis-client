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
 * Class User
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $gravatarId;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var boolean
     */
    protected $isSyncing;

    /**
     * @var \DateTime
     */
    protected $sincedAt;

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $gravatarId
     */
    public function setGravatarId($gravatarId)
    {
        $this->gravatarId = $gravatarId;
    }

    /**
     * @return string
     */
    public function getGravatarId()
    {
        return $this->gravatarId;
    }

    /**
     * @param boolean $isSyncing
     */
    public function setIsSyncing($isSyncing)
    {
        $this->isSyncing = $isSyncing;
    }

    /**
     * @return boolean
     */
    public function getIsSyncing()
    {
        return $this->isSyncing;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $sincedAt
     */
    public function setSincedAt($sincedAt)
    {
        if (!is_object($sincedAt)) {
            $this->sincedAt = new \DateTime($sincedAt);
        } else {
            $this->sincedAt = $sincedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getSincedAt()
    {
        return $this->sincedAt;
    }
}
