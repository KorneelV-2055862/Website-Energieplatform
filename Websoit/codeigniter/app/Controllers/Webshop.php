<?php namespace App\Controllers;

class Webshop extends BaseController
{
    public function index()
    {
        return view('webshop');
    }

    public function product($type = 'Laptop', $product_id = 'Apple')
    {
        echo '<h2>This is a product: ' .$type. ' with an id: ' .$product_id. '</h2>';
    }

}
