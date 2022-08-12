<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    public function index()
    {
        return view('pages.frontend.creation');
    }
    
    // public function detail(Request $request, $slug)
    // {
    //     $categories = Category::all();
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $products = Product::where('categories_id', $category->id)->paginate($request->input('limit', 12));

    //     return view('pages.category',[
    //         'categories' => $categories,
    //         'category' => $category,
    //         'products' => $products
    //     ]);
    // }

}
