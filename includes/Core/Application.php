<?php

namespace FreshStoreBuilder\Core;

use FreshStoreBuilder\Exceptions\IonCubeException;

class Application
{
    private $controllers;
	protected $parameters;

    public function __construct($parameters)
    {
		$this->parameters = $parameters;
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