<?php namespace Twilio;

use Services_Twilio;

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

    /**
     * Call an specific phone by number
     *
     * @param $phone
     * @param $twiml
     * @return mixed
     */
    public function call($phone, $twiml = '') {
        $client = new Services_Twilio($this->sid, $this->token);

        return $client->account->calls->create($this->from, $phone, $twiml);
    }
}