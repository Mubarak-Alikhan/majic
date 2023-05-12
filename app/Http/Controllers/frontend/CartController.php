<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
	public function index()
	{

		$cartitems = Cart::where('user_id', Auth::id())->get();
		return view('pages.cart', compact('cartitems'));
	}
	public function add($id)
	{
		$product = Product::find($id);
		if (!$product) abort(404);

		$cart = session()->get('cart');
		if (!$cart) {
			$cart = [
				$id => [
					"name" => $product->name,
					"quantity" => 1,
					"price" => $product->selling_price,
					"image" => $product->image
				]
			];
			session()->put('cart', $cart);
			return redirect()->back()->with('success', 'Product added to cart successfully!');
		}

		if (isset($cart[$id])) {
			$cart[$id]['quantity']++;
			session()->put('cart', $cart);
			return redirect()->back()->with('success', 'Product added to cart successfully!');
		}


		$cart[$id] = [
			"name" => $product->name,
			"quantity" => 1,
			"price" => $product->selling_price,
			"image" => $product->image,

		];

		$product =  session()->put('cart', $cart);
		return redirect()->back()->with('success', 'Product added to cart successfully!');
	}

	public function removecart($id)
	{
		$cart = session()->get('cart');
		if (isset($cart[$id])) {
			unset($cart[$id]);
			session()->put('cart', $cart);
		}
		return redirect()->back()->with('success', 'Product remove from cart successfully!');
	}
	public function cartList()
	{
		if (session()->exists('cart')) {
			$cart = session()->get('cart');
			$product = Product::where('id', $cart)->get();

			return view('pages.cart', compact('product'));
		} else {
			return view('pages.nocart');
		}
	}
}
