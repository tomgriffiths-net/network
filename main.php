<?php
class network{
    public static function ping(string $ip, int $port, float $timeout=1.0):bool{
        $conectionStream = @fsockopen($ip, $port, $errno, $errstr, $timeout);
        if($conectionStream){
            @fclose($conectionStream);
            return true;
        }
        return false;
    }
    public static function isValidIp(mixed $ip):bool{
        return (is_string($ip) && filter_var($ip, FILTER_VALIDATE_IP) !== false);
    }
    public static function isValidPort(mixed $port):bool{
        if(is_int($port)){
            return ($port > 0 && $port <= 65535);
        }
        if(is_string($port) && ctype_digit($port)){
            $p = (int)$port;
            return ($p > 0 && $p <= 65535);
        }
        return false;
    }
    public static function isValidTimeout(mixed $timeout):bool{
        return ((is_int($timeout) || is_string($timeout) && is_numeric($timeout)) && (float)$timeout > 0);
    }
}