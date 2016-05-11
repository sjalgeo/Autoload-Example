<?php
/**
 * Created by PhpStorm.
 * User: sjalgeo
 * Date: 11/05/2016
 * Time: 15:25
 */

namespace FreshStoreBuilder\Entity;


class User
{
    public function __construct()
    {
        $this->info = "some info";
        echo 'construct'.'<br />';
    }

    public function getInfo()
    {
        echo 'getInfo'.'<br />';
        return $this->info;
    }
}