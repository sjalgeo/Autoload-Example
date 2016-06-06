<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


## Use Stuff
use FreshStoreBuilder\Core\FrontEnd;


## Define Absolutely Core Items
define ('PATH_INCLUDES', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'includes');
define ('PATH_TEMPLATE', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'templates/mytemplate');


## Include Stuff to Autoload
include_once ('library/misc.php');
include_once ('autoload.php');
include_once ('vendor/autoload.php');


## Go Time
$app = new FrontEnd(
    array(
        'ioncube_override' => true,
		'pagetype' => array_lookup($_GET, 'q')
    )
);


## Display App
$app->render();