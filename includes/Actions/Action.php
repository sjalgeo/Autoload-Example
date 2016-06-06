<?php
/**
 * Created by PhpStorm.
 * User: sjalgeo
 * Date: 05/06/2016
 * Time: 16:35
 */

namespace FreshStoreBuilder\Actions;


class Action
{
    private $data = array();

    protected function setValue($key, $value)
    {
        $this->data[$key] = $value;
    }

    protected function getValue($key)
    {
        return isset( $this->data[$key] ) ? $this->data[$key] : null;
    }

	public function fetchData()
	{
		return $this->data;
	}
}