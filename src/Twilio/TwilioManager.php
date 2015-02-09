<?php namespace Twilio;

use Twilio\Exception\TwilioException;

class TwilioManger {

    /**
     * @var array
     */
    private $config;

    /**
     * Store connections instances .
     *
     * @var array
     */
    protected $connections = [];

    /**
     * @var
     */
    protected $current;

    public function __construct(array $config) {
        $this->config = $config;

        if( $default = $config['default'] )
            self::connect($default);
    }

    /**
     * Call direct twilio functions ..
     *
     * @param $name
     * @param array $args
     * @return mixed
     * @throws TwilioException
     */
    public function __call($name, array $args = []) {
        if( ! $this->current )
            throw new TwilioException('You have no active connection');

        return call_user_func_array([$this->connections[$this->current], $name], $args);
    }

    /**
     * Return an specific connection by alias connection .
     *
     * @param $alias
     * @param array $params
     * @return \Twilio\Twilio
     * @throws TwilioException
     */
    public function connect($alias, array $params = []) {
        if( in_array($alias, $this->connections) )
            return $this->connections[$alias];

        $params = array_merge(self::getConnection($alias), $params);

        $twilioInstance = new Twilio($params['sid'], $params['token'], $params['from']);

        $this->current             = $alias;
        $this->connections[$alias] = $twilioInstance;

        return $twilioInstance;
    }

    /**
     * Check if exists connection by alias ..
     *
     * @param $alias
     * @return bool
     */
    public function isConnection($alias) {
        if( in_array($alias, array_keys($this->config['connections'])) )
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