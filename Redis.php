<?php
namespace imooc;

class Redis {
    private static $_instance = null;

    // private __construct
    private function __construct()
    {
        //
    }

    // limit clone
    public function __clone()
    {
        exit('clone is limited');
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = self::connect();
        }
        return self::$_instance;
    }

    // connect
    private static function connect()
    {
        $redis = new \Redis();
        if (!$redis->connect('127.0.0.1', '6379')) exit('redis connect failure');
        return $redis;
    }
}

class Client
{
    public static function main()
    {
        $redis = Redis::getInstance();
        if ($redis->set('k1', 'v1')) {
            echo $redis->get('k1');
        } else {
            exit('set key failure');
        }
    }
}

// test
Client::main();












