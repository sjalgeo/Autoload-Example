<?php

namespace FreshStoreBuilder\Actions;

use FreshStoreBuilder\Actions\Action;

class GetProductsAction extends Action
{
    public function execute()
    {
        ## Fetch all products

        $products = array();

        for ($i=77; $i < 99; $i++)
        {
            $prod = array(
                'id' => $i,
                'asin'=>'DGEJRGE'.$i,
                'title' => 'Some product title'
            );

            $products[] = $prod;
        }

        $this->setValue('product-set', $products);

        var_dump($products);
    }
}