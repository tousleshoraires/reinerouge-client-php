<?php

namespace TLH\ReineRougeClient\Model;

interface UserInterface
{
    /**
     * @return string|null
     */
    public function getBirthDate();

    /**
     * @return string|null
     */
    public function getEmail();

    /**
     * @return string|null
     */
    public function getFirstName();

    /**
     * @return string|null
     */
    public function getLastName();

    /**
     * @return string|null
     */
    public function getPhone();

    /**
     * @return string|null
     */
    public function getTitle();

    /**
     * @return string|null
     */
    public function getZipCode();

    /**
     * @return string|null
     */
    public function getCustom1();

    /**
     * @return string|null
     */
    public function getCustom2();

    /**
     * @return string|null
     */
    public function getUid();

    /**
     * @return \DateTimeInterface
     */
    public function getOptInDate();

    /**
     * @return string|null
     */
    public function getOptInUrl();
}
