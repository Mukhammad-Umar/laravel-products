<?php

namespace App\Http\Controllers\Each;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('product.product');
    }

}
