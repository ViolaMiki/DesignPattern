<?php
/**
 * Created by PhpStorm.
 * User: miki
 * Date: 2016-6-15
 * Time: 21:25
 */
class Singleton
{
    private static $singleton = null;

    private function Singleton()
    {
        echo '实例化成功';
    }

    public static function getInstence()
    {
        if(is_null(self::$singleton))
        {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}

Singleton::getInstence();
