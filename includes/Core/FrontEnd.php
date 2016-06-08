<?php

namespace FreshStoreBuilder\Core;

use FreshStoreBuilder\Actions\GetProductsAction;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_Extension_Debug;

class FrontEnd extends Application
{
    public function __construct($parameters)
    {
        if ( ! $parameters['pagetype'] ) $parameters['pagetype'] = 'homepage';
        parent::__construct($parameters);
    }

    public function render()
    {
        $controller = new GetProductsAction();

        $controller->execute();
		$data = $controller->fetchData();


		$loader = new Twig_Loader_Filesystem( PATH_TEMPLATE . 'pages' . DIRECTORY_SEPARATOR);
		$twig = new Twig_Environment($loader, array(
//			'cache' => '/Users/sjalgeo/GitHub/Autoload-Example/compilation_cache',
			'cache' => false,
			'debug'	=> true
		));

		$twig->addExtension(new Twig_Extension_Debug());
		echo $twig->render($this->parameters['pagetype'].'.twig', $data);
    }
}