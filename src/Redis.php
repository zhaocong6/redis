<?php
namespace Redis;
use Predis\Client;
/**
 * Interface defining a client-side context such as a pipeline or transaction.
 *
 * @method $this del(array $keys)
 * @method $this dump($key)
 * @method $this exists($key)
 * @method $this expire($key, $seconds)
 * @method $this expireat($key, $timestamp)
 * @method $this keys($pattern)
 * @method $this move($key, $db)
 * @method $this object($subcommand, $key)
 * @method $this persist($key)
 * @method $this pexpire($key, $milliseconds)
 * @method $this pexpireat($key, $timestamp)
 * @method $this pttl($key)
 * @method $this randomkey()
 * @method $this rename($key, $target)
 * @method $this renamenx($key, $target)
 * @method $this scan($cursor, array $options = null)
 * @method $this sort($key, array $options = null)
 * @method $this ttl($key)
 * @method $this type($key)
 * @method $this append($key, $value)
 * @method $this bitcount($key, $start = null, $end = null)
 * @method $this bitop($operation, $destkey, $key)
 * @method $this bitfield($key, $subcommand, ...$subcommandArg)
 * @method $this decr($key)
 * @method $this decrby($key, $decrement)
 * @method $this get($key)
 * @method $this getbit($key, $offset)
 * @method $this getrange($key, $start, $end)
 * @method $this getset($key, $value)
 * @method $this incr($key)
 * @method $this incrby($key, $increment)
 * @method $this incrbyfloat($key, $increment)
 * @method $this mget(array $keys)
 * @method $this mset(array $dictionary)
 * @method $this msetnx(array $dictionary)
 * @method $this psetex($key, $milliseconds, $value)
 * @method $this set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null)
 * @method $this setbit($key, $offset, $value)
 * @method $this setex($key, $seconds, $value)
 * @method $this setnx($key, $value)
 * @method $this setrange($key, $offset, $value)
 * @method $this strlen($key)
 * @method $this hdel($key, array $fields)
 * @method $this hexists($key, $field)
 * @method $this hget($key, $field)
 * @method $this hgetall($key)
 * @method $this hincrby($key, $field, $increment)
 * @method $this hincrbyfloat($key, $field, $increment)
 * @method $this hkeys($key)
 * @method $this hlen($key)
 * @method $this hmget($key, array $fields)
 * @method $this hmset($key, array $dictionary)
 * @method $this hscan($key, $cursor, array $options = null)
 * @method $this hset($key, $field, $value)
 * @method $this hsetnx($key, $field, $value)
 * @method $this hvals($key)
 * @method $this hstrlen($key, $field)
 * @method $this blpop(array $keys, $timeout)
 * @method $this brpop(array $keys, $timeout)
 * @method $this brpoplpush($source, $destination, $timeout)
 * @method $this lindex($key, $index)
 * @method $this linsert($key, $whence, $pivot, $value)
 * @method $this llen($key)
 * @method $this lpop($key)
 * @method $this lpush($key, array $values)
 * @method $this lpushx($key, $value)
 * @method $this lrange($key, $start, $stop)
 * @method $this lrem($key, $count, $value)
 * @method $this lset($key, $index, $value)
 * @method $this ltrim($key, $start, $stop)
 * @method $this rpop($key)
 * @method $this rpoplpush($source, $destination)
 * @method $this rpush($key, array $values)
 * @method $this rpushx($key, $value)
 * @method $this sadd($key, array $members)
 * @method $this scard($key)
 * @method $this sdiff(array $keys)
 * @method $this sdiffstore($destination, array $keys)
 * @method $this sinter(array $keys)
 * @method $this sinterstore($destination, array $keys)
 * @method $this sismember($key, $member)
 * @method $this smembers($key)
 * @method $this smove($source, $destination, $member)
 * @method $this spop($key, $count = null)
 * @method $this srandmember($key, $count = null)
 * @method $this srem($key, $member)
 * @method $this sscan($key, $cursor, array $options = null)
 * @method $this sunion(array $keys)
 * @method $this sunionstore($destination, array $keys)
 * @method $this zadd($key, array $membersAndScoresDictionary)
 * @method $this zcard($key)
 * @method $this zcount($key, $min, $max)
 * @method $this zincrby($key, $increment, $member)
 * @method $this zinterstore($destination, array $keys, array $options = null)
 * @method $this zrange($key, $start, $stop, array $options = null)
 * @method $this zrangebyscore($key, $min, $max, array $options = null)
 * @method $this zrank($key, $member)
 * @method $this zrem($key, $member)
 * @method $this zremrangebyrank($key, $start, $stop)
 * @method $this zremrangebyscore($key, $min, $max)
 * @method $this zrevrange($key, $start, $stop, array $options = null)
 * @method $this zrevrangebyscore($key, $min, $max, array $options = null)
 * @method $this zrevrank($key, $member)
 * @method $this zunionstore($destination, array $keys, array $options = null)
 * @method $this zscore($key, $member)
 * @method $this zscan($key, $cursor, array $options = null)
 * @method $this zrangebylex($key, $start, $stop, array $options = null)
 * @method $this zrevrangebylex($key, $start, $stop, array $options = null)
 * @method $this zremrangebylex($key, $min, $max)
 * @method $this zlexcount($key, $min, $max)
 * @method $this pfadd($key, array $elements)
 * @method $this pfmerge($destinationKey, array $sourceKeys)
 * @method $this pfcount(array $keys)
 * @method $this pubsub($subcommand, $argument)
 * @method $this publish($channel, $message)
 * @method $this discard()
 * @method $this exec()
 * @method $this multi()
 * @method $this unwatch()
 * @method $this watch($key)
 * @method $this eval($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method $this evalsha($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method $this script($subcommand, $argument = null)
 * @method $this auth($password)
 * @method $this echo($message)
 * @method $this ping($message = null)
 * @method $this select($database)
 * @method $this bgrewriteaof()
 * @method $this bgsave()
 * @method $this client($subcommand, $argument = null)
 * @method $this config($subcommand, $argument = null)
 * @method $this dbsize()
 * @method $this flushall()
 * @method $this flushdb()
 * @method $this info($section = null)
 * @method $this lastsave()
 * @method $this save()
 * @method $this slaveof($host, $port)
 * @method $this slowlog($subcommand, $argument = null)
 * @method $this time()
 * @method $this command()
 * @method $this geoadd($key, $longitude, $latitude, $member)
 * @method $this geohash($key, array $members)
 * @method $this geopos($key, array $members)
 * @method $this geodist($key, $member1, $member2, $unit = null)
 * @method $this georadius($key, $longitude, $latitude, $radius, $unit, array $options = null)
 * @method $this georadiusbymember($key, $member, $radius, $unit, array $options = null)
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
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
        self::getConfig($config);
    }
    /**
     * 实例化调用
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $redis = $this->initRedis();
        // TODO: Implement __call() method.
        return call_user_func_array([$redis, $name], $arguments);
    }
    /**
     * @return Client
     */
    private function initRedis()
    {
        $config = empty(self::$config) ? [] : self::$config;

        $config = array_merge([
            'read_write_timeout'=>  0,
            'persistent'        =>  true
        ], $config);

        $this->redis = new Client($config);
        
        return $this->redis;
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
            self::$config = [
                'host'  =>  '127.0.0.1',
                'port'  =>  '6379'
            ];
        }
        return self::$config;
    }
}
