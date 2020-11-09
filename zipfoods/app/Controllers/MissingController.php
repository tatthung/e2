<?php
namespace App\Controllers;

use App\Products;

class MissingController extends Controller
{
    public function missing()
    {
        $products = new Products($this->app->path('database/products.json'));

        return $this->app->view('products.missing', [
            'products' => $products->getAll()
        ]);
    }
}