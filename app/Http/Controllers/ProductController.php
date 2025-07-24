<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {

        try {

            $products = Cache::remember('products_page', 60, function () {
                return Product::paginate(15);
            });
            return view('website.product-listing', compact('products'));
        } catch (\Exception $exception) {
            return redirect()->back();
        }
    }

    public function show(Request $request)
    {
        try {

            $product = Product::where('id', decrypt($request->id))->first();

            if ($product) {
                return view('website.product-details', compact('product'));
            }

            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
    }
}
