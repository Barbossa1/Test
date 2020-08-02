<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Goods;

class Product extends \Core\Controller
{
    public function goodAction()
    {
        View::renderTemplate('Product/index.html',[
            'goods' => Goods::getOne(explode("/",$_SERVER['QUERY_STRING'])[2])
        ]);
    }
}