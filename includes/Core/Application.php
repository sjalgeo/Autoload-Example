<?php
/**
 * Created by PhpStorm.
 * User: sjalgeo
 * Date: 11/05/2016
 * Time: 15:43
 */

namespace FreshStoreBuilder\Core;

use FreshStoreBuilder\Exceptions\IonCubeException;

class Application
{
    private $controllers;

    public function __construct($controllers)
    {

    }

    private function guardAgainstMissingIoncube()
    {
        if ($this->ioncube_override) return;

        if( ! extension_loaded('ionCube Loader') )
        {
            throw new IonCubeException();
        }
    }
}