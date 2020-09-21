<?php

namespace TLH\ReineRougeClient\Model;

class Response implements ResponseInterface
{
    /** @var array $answer */
    protected $answer;

    /**
     * Response constructor.
     *
     * @param array $answer
     */
    public function __construct($answer)
    {
        $this->answer = $answer;
    }

    public function isSuccessful()
    {
        return (bool)$this->answer['success'];
    }

    public function getMessage()
    {
        return (null === $this->answer['message']) ? '' : $this->answer['message'];
    }
}
