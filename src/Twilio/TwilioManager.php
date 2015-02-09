<?php namespace Twilio;

class TwilioManger {

    /**
     * @var array
     */
    private $config;

    public function __construct(array $config) {
        $this->config = $config;
    }

    /**
     * Check if exists connection by alias ..
     *
     * @param $alias
     * @return bool
     */
    public function isConnection($alias) {
        if( in_array($alias, $this->config['connections']) )
            return true;

        return false;
    }
}