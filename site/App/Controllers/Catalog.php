<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Goods;

class Catalog extends \Core\Controller
{
    public function goodsAction()
    {
        View::renderTemplate('Catalog/index.html',[
            'goods' => Goods::getAll()
        ]);
    }
}