<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all();
        $items = Season::with('season')->get();
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function store(ProductRequest $request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'description'
        ]);
        
        $season = Season::find($season_id);
        dd($contact);

        return view('register');
    }

    public function create(ProductRequest $request)
    {
        $product = $request->only([

        ]);
        
        $season = Season::find($season_id);
        dd($contact);
        
        return view('register');
    }
}
