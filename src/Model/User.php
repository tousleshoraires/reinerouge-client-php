<?php

namespace TLH\ReineRougeClient\Model;

class User implements UserInterface
{
    /** @var string $birthDate */
    protected $birthDate;

    /** @var string $email */
    protected $email;

    /** @var string $firstName */
    protected $firstName;

    /** @var string $lastName */
    protected $lastName;

    /** @var string|null $phone */
    protected $phone;

    /** @var string|null $title */
    protected $title;

    /** @var string|null $zipCode */
    protected $zipCode;

    /** @var string|null $custom1 */
    protected $custom1;

    /** @var string|null $custom2 */
    protected $custom2;

    /** @var string $uid */
    protected $uid;

    /** @var \DateTimeInterface $optInDate */
    protected $optInDate;

    /** @var string $optInUrl */
    protected $optInUrl;

    /**
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return User
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return User
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * @param string|null $custom1
     *
     * @return User
     */
    public function setCustom1($custom1)
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * @param string|null $custom2
     *
     * @return User
     */
    public function setCustom2($custom2)
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUid()
    {
        return (null === $this->uid) ? '' : $this->uid;
    }

    /**
     * @param string $uid
     *
     * @return User
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOptInDate()
    {
        if (null === $this->optInDate && class_exists(\Error::class)) {
            throw new \Error('The opt-in date must be a DateTime::class');
        } elseif (null === $this->optInDate && class_exists(\Exception::class)) {
            throw new \Exception('The opt-in date must be a DateTime::class');
        }
        return $this->optInDate;
    }

    /**
     * @param \DateTimeInterface $optInDate
     *
     * @return User
     */
    public function setOptInDate(\DateTimeInterface $optInDate)
    {
        $this->optInDate = $optInDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptInUrl()
    {
        return (null === $this->optInUrl) ? '' : $this->optInUrl;
    }

    /**
     * @param string $optInUrl
     *
     * @return User
     */
    public function setOptInUrl($optInUrl)
    {
        $this->optInUrl = $optInUrl;

        return $this;
    }
}
