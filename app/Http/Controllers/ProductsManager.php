<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\Products;
use App\Models\Products; // Ensure you have the correct namespace for your Products model
use App\Models\cart;

class ProductsManager extends Controller
{  
    //we made the Product table using migration
        //then products model and then we are here 

    function index()

    {   // Fetch all products from the Products model
       // This assumes you have a Products model set up correctly
       // and that it interacts with your products database table.
       // You can adjust the pagination number as needed
       // Here, we are paginating the products to display 4 per page.
       $products= Products::paginate(4);
       return view ('products', compact('products'));// Pass the products to the 'products' view
    }

    function details($slug)
    {
        // Fetch a single product by its slug
        $product = Products::where('slug', $slug)->firstOrFail();
        
        // Return the 'details' view with the product data
        return view('details', compact('product'));
    }
     

    
    //we made the cart table using migration
    //then cart model and then we are here 
    function addToCart($id)
    {
      $cart = new cart();
      $cart->user_id = auth()->user()->id;
      $cart->product_id = $id;
      if ($cart->save()) {
        return redirect()->back()->with('success', 'Product added to cart successfully!');
      }
      return redirect()->back()->with('error','Something went wrong');
    }

    function showCart()
    {
        // Fetch the cart items for the authenticated user
        $cartItems = DB::table('cart')
    ->join('products', 'cart.product_id', '=', 'products.id')
    ->where('cart.user_id', auth()->id())
    ->select('cart.id as cart_id', 'products.*')
    ->get();
        
        // Return the 'cart' view with the cart items
        return view('cart', compact('cartItems'));
    }
    function removeFromCart($id)
    {
        // Remove the cart item by its id and the current user
        DB::table('cart')
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        return redirect()->back()->with('success', 'Item removed from cart!');
    }
}
