<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    private $categories;
    private $products;

    public function index()
    {
        $this->categories = Category::all();
        $this->products = Product::orderBy('id', 'desc')->take(8)->get();
        return view('front.home.home', [
            'categories' => $this->categories,
            'products'  => $this->products
        ]);
    }

    public function categoryProduct()
    {
        return view('front.category.category-product');
    }

    public function productDetail()
    {
        return view('front.product.detail');
    }
}
