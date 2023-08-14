<?php

namespace App\Http\Controllers\Home;

use App\Contracts\Interfaces\ProductInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    private ProductInterface $product;


    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $products = $this->product->get();
        return view('pages.product', compact('products'));
    }
}
