<?php

function array_lookup( $array , $element, $returniffalse = false, $returniftrue = null){

	if ( (!is_array($array)) OR (!isset( $array[$element] )) OR ($array[$element] == "") )
	{
		return $returniffalse;          # Custom Item to Return if any of the tests fails
	}else{
		if ( $returniftrue == null ){
			return $array[$element];        # Return item from element in array
		} else {
			return $returniftrue;           # Custom Item to return instead of item if set
		}
	}
}