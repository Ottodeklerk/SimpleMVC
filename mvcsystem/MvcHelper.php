<?php
/**
 * Created by PhpStorm.
 * User: ottodeklerk
 * Date: 10-02-17
 * Time: 12:01
 */

namespace mvcsystem;


class MvcHelper
{
    public static function rootDir($appDirectory =''){
        return __DIR__.'/../'.$appDirectory.'/';
    }

}