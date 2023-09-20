<?php
class Setting 
{
    static $setting = null;
    public $dark = 0;
    protected function __construct()
    
    {
     //   
    }

    static function create()
    {
        if(!static::$setting) {
            static::$setting = new static;
        }
        return static::$setting;
    }

     
}

$setting1 = Setting::create();
echo $setting1->dark = 1 . "<br>";

$setting2 = Setting::create();
echo $setting2->dark;
