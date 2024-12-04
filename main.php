<?php
//Your Variables go here: $GLOBALS['network']['YourVariableName'] = YourVariableValue
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
    //public static function command($line):void{}//Run when base command is class name, $line is anything after base command (string). e.g. > [base command] [$line]
    //public static function init():void{}//Run at startup
}