<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\Product;

class ProductsController extends Controller {

    protected $product;

    public function __construct(Product $product)
    {
        $this->product= $product;
    }

    public function index()
    {
        $this->render($this->product->get());
    }


}