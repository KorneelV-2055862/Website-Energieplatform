<?php

namespace App\Controllers;

use App\Controllers\Webshop as Adminshop;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    function valdidation()
    {
        $webshop = new Webshop();
        echo $webshop->product('laptop', 'lenovo').'<br>';

        $adminshop = new Adminshop();
        echo $adminshop->product('laptop', 'lenovo');

    }

    function show404()
    {
        echo 'ERROR this is a 404 page!';
    }
    
}
