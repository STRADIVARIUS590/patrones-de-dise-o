<?php 

class Singleton{
    
    /**
     * 
     */
    private static $instances = [];

    // protected permite que no se llame a este motodo desde afuera de esta clase 
    protected function __construct(){}
    protected function __clone(){} 
    protected function __wakeup(){
        throw new \Exception('No se puede deserializar un singleton');
    }


    public static function getInstance(): Singleton{
        $cls = static::class;

        if(!isset(self::$instances[$cls])){
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

}