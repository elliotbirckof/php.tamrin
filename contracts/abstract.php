<?php

abstract class onlineGetway{

    protected $options;

    public function __construct()
    {

    }

    abstract public function sendRequest();
    abstract public function verifyRequest();

}


class Melat extends onlineGetway{

    public function sendRequest()
    {
        // TODO: Implement sendRequest() method.
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}


class Factory {
    public static function make($class)
    {
        $className = ucfirst($class);
        if (!class_exists($className)){
            return false;
        }
        return new $className;
    }
}