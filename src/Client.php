<?php

namespace TLH\ReineRougeClient;

use TLH\ReineRougeClient\Model\Response;
use TLH\ReineRougeClient\Model\UserInterface;
use TLH\ReineRougeClient\Utils\GeneratorInterface;

class Client
{
    /** @var string $url */
    protected $url;

    /** @var GeneratorInterface $generator */
    private $generator;

    /**
     * Client constructor.
     *
     * @param string $url
     * @param GeneratorInterface $generator
     */
    public function __construct($url, GeneratorInterface $generator)
    {
        $this->url = $url;
        $this->generator = $generator;
    }

    public function send(UserInterface $user)
    {
        if (!preg_match('`/$`', $this->url)) {
            $this->url.= '/';
        }
        $url = $this->url.$user->getEmail();

        $postData = $this->generator->prepareData($user);

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($handle);
        $responseCode   = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        curl_close($handle);

        if (200 === $responseCode) {
            return new Response(json_decode($output, true));
        }

        return new Response(['success' => false, 'message' => curl_error($handle)]);
    }
}
