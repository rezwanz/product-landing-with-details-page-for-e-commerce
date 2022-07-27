<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $products;
    public $product;
    public function index ()
    {
        $this->products = Product::allProducts();
        return view('home.home',[
            'products' => $this->products,
        ]);
    }
    public function about ()
    {
        return view('about.about');
    }
    public function support ()
    {
        return view('support.support');
    }
    public function contact ()
    {
        return view('contact.contact');
    }
    public function productDetails ($id)
    {
        $this->products = Product::allProducts();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                $this->product = $item;
            }
        }
        return view('product.details',[
            'product' => $this->product,
        ]);
    }
}
