<?php namespace Twilio;

use Twilio\Exception\TwilioException;

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

    /**
     * Get connection params by alias ..
     *
     * @param $alias
     * @return mixed
     * @throws TwilioException
     */
    public function getConnection($alias) {
        if( ! self::isConnection($alias) )
            throw new TwilioException('invalid connection alias. Please provider another valid one!');

        return $this->config['connections'][$alias];
    }
}