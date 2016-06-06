<?php

function autoload_function( $class_name )
{
	## Try to Load the Class from FSB Core

	$class = str_replace( '\\', DIRECTORY_SEPARATOR, str_replace( '_', '-', $class_name ) );

	# create the actual filepath
	$filePath = PATH_INCLUDES . DIRECTORY_SEPARATOR . $class . '.php';
	$filePath = str_replace('FreshStoreBuilder/', '', $filePath);

	# check if the file exists
	if( file_exists( $filePath ) )
	{
		require_once $filePath;
		return;
	}



	## Try to load the Class from the Template
	$class = str_replace( '\\', DIRECTORY_SEPARATOR, str_replace( '_', '-', $class_name ) );

	# create the actual filepath
	$filePath = PATH_TEMPLATE . DIRECTORY_SEPARATOR . $class . '.php';
	$filePath = str_replace('FreshStoreBuilder/', '', $filePath);


	# check if the file exists
	if( file_exists( $filePath ) ) require_once $filePath;
}

spl_autoload_register('autoload_function');