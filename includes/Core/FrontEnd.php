<?php
/**
 * Created by PhpStorm.
 * User: sjalgeo
 * Date: 11/05/2016
 * Time: 15:55
 */

namespace FreshStoreBuilder\Core;

use FreshStoreBuilder\Controllers\AllProducts;
use FreshStoreBuilder\Actions\GetProductsAction;

class FrontEnd extends Application
{
    public function __construct($parameters)
    {
        parent::__construct($parameters);
    }

    public function render()
    {
        $controller = new GetProductsAction();

        $controller->execute();
    }
}