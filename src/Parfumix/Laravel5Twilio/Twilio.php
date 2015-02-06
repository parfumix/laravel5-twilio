<?php namespace Parfumix\Laravel5Twilio;

class Twilio {

    /**
     * @var
     */
    private $sid;

    /**
     * @var
     */
    private $token;

    /**
     * @var
     */
    private $from;

    /**
     * @var bool
     */
    private $sslVerify;

    public function __construct($sid, $token, $from, $sslVerify = true) {

        $this->sid = $sid;
        $this->token = $token;
        $this->from = $from;
        $this->sslVerify = $sslVerify;
    }
}