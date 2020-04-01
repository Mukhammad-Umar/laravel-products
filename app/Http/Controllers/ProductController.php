<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Repositories\ProductRepository;
use App\ {
    Repositories\ProductRepository,
    Models\Product,
    Models\Cart,
    Http\Requests\CartRequest,
    Http\Requests\MailerRequest
};

class ProductController{

    /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
     protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductRepository $repository)
    // public function __construct()
    {
        // $this->middleware('auth');
        $this->repository = $repository;
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index(Request $request, ProductRepository $repository)
    public function index(Request $request)
    {
        $products = $this->repository->funcSelect($request); // $_GET['top9'], $_GET['search'] == $request->top9, $request->search
        // $products = $repository->funcSelect($request);
        
        // Ajax response
        if ($request->ajax()) {
            return response()->json([
                'table' => view("product.brick-standard", ['products' => $products])->render(),
            ]); 
        } 

        // Submit response
        return view('product.index', compact('products')); //['products' => $products]
    } 

    /**
     * Show the application product-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product($id, Product $model_product)
    {
        //$product = $this->repository->funcSelectOne($id);
        $product = $model_product->find($id); 

        return view('product.product', compact('product')); //['anyname' => $product]
    }  

    /**
     * Show the application cart_page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart(Request $request)
    {
        $carts = $this->repository->fromCart();
        
        // Ajax response
        if ($request->ajax()) {
            return response()->json([
                'table' => view("product.cart-standard", compact('carts'))->render(),
            ]); 
        } 

        return view('product.cart', compact('carts'));
    }

    /**
     * Show the application store_tocart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tocart(CartRequest $request)
    {
        $this->repository->store($request);   

        return redirect(route('cart'));   // (url('/cart'))
    }
    
    /**
     * Remove all cart DB.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function clearall(Request $request, Cart $model_cart)
     {
         //$this->repository->clearall();   
         $model_cart->truncate();

         // Ajax response
         if ($request->ajax()) {
            return response()->json(); 
         }

         return redirect(route('cart'));   // (url('/cart'))
     }
     
    /**
     * RemoveOne from cart DB.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function clearone(Request $request)
     {
         $this->repository->clearone($request);  //$request->id
     } 
     
    /**
     * Mailer For sending message and contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function mailer(MailerRequest $request)
     {
        if(isset($request->validator) && $request->validator->fails()) //if you need validator->errors() in Controller
        {
            return json_encode($request->validator->errors());
        }

        return $this->repository->mailer($request);  //$request->id
     }
}
