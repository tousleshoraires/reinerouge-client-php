<?php


namespace TLH\ReineRougeClient\Utils;


use TLH\ReineRougeClient\Model\UserInterface;

class Generator implements GeneratorInterface
{
    const OPTIN_DATE_FORMAT = 'Y-m-d H:i:s';
    /**
     * @var bool $legacy
     */
    private $legacy = false;

    public function setLegacy(bool $legacy): void
    {
        $this->legacy = $legacy;
    }

    /**
     * @param UserInterface $user
     * @return array
     */
    public function prepareData(UserInterface $user)
    {
        $data = [];

        $data = $this->addField($user, $data, 'firstname', 'getFirstName');
        $data = $this->addField($user, $data, 'lastname', 'getLastName');
        $data = $this->addField($user, $data, 'phone', 'getPhone');
        $data = $this->addField($user, $data, 'title', 'getTitle');
        $data = $this->addField($user, $data, 'zipcode', 'getZipCode');
        $data = $this->addField($user, $data, 'custom1', 'getCustom1');
        $data = $this->addField($user, $data, 'custom2', 'getCustom2');

        $data['ip_address'] = $user->getUid();
        $data['page_url'] = $user->getOptInUrl();
        if ($user->getOptInDate()) {
            $data['timestamp'] = $user->getOptInDate()->format(self::OPTIN_DATE_FORMAT);
        }

        if ($this->legacy) {
            $data['ip'] = $data['ip_address'];
            $data['urlcollection'] = $data['page_url'];
        }

        return $data;
    }

    /**
     * @param UserInterface $user
     * @param array $data
     * @param string $field
     * @param string $method
     * @return array
     */
    protected function addField(UserInterface $user, $data, $field, $method)
    {
        if (!method_exists($user, $method)) {
            return $data;
        }

        if ($user->{$method}()) {
            $data[$field] = $user->{$method}();
        }

        return $data;
    }
}
