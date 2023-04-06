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
        return view('frontend.home', compact('category_products', 'category_list'));
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
