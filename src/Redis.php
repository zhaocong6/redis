<?php

namespace Redis;

use Predis\Client;

class Redis
{

    private static $config;
    private $redis;

    /**
     * Redis constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
        $config = self::getConfig($config);

        $this->redis = new Client($config);
    }

    /**
     * 实例化调用
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return call_user_func_array([$this->redis, $name], $arguments);
    }

    /**
     * @param array $config
     * @return array
     */
    private static function getConfig($config = [])
    {
        if (self::$config) return self::$config;

        //判断是否是实例化传值
        if (!empty($config)) {
            return self::$config = $config;
        }

        //判断是否是tp框架
        if (defined('THINK_VERSION')){
            self::$config = C('redis');
        }

        //设置默认参数
        if (empty(self::$config)){
            $config = [
                'host'  =>  '127.0.0.1',
                'port'  =>  '6379'
            ];
        }

        return self::$config = $config;
    }
}