<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index (){
        try {

            // $products = Cache::remember('products_page', 60, function () {
            //     return Product::paginate(15);
            // });
            return view('website.profile');
        } catch (\Exception $exception) {
            return redirect()->back();
        }
    }
}
