<?php
class network{
    public static function ping($ip,$port,$timeout=0.2):bool{
        //Ping ip and port
        $conectionStream = @fsockopen($ip, $port, $errno, $errstr, $timeout);
        //Return true on response, false on failure
        if($conectionStream !== false) {
            return true;
        }
        else{
            return false;
        }
    }
}