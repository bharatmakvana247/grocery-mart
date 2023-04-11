<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function dashboard()
    {
        $category_products = Category::with(['product_list'])->get();
        $category_list = Category::get();
        return view('frontend.pages.product.home', compact('category_products', 'category_list'));
    }

    public function singleProduct($id)
    {
        $single_products = Product::with('category', 'brand')->where('product_id', $id)->first();
        return view('frontend.pages.product.singleProduct', with([
            'single_product' => $single_products
        ]));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
