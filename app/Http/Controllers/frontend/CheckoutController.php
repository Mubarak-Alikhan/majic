<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
	public function index()
	{
		return view('pages.checkout');
	}

	public function placeorder(Request $request)
	{
		dd($request->all());
		$rules = [
			'first_name' => 'required|max:100',
			'last_name' => 'required|email',
			'company_name' => 'required',
			'address' => 'required',
			'city' => 'required',
			'zip_code' => 'required',
			'email' => 'required',
			'phone_number' => 'required',
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails())
			return back()->withErrors($validator);

		$response = Checkout::create([

			'first_name'          => $request->first_name,
			'last_name'     			=> $request->last_name,
			'company_name'        => $request->company_name,
			'address'        			=> $request->email,
			'city'     						=> $request->city,
			'zip_code'      		 	=> $request->zip_code,
			'email'         			=> $request->email,
			'phone_number'       	=> $request->phone_number,
			'description' 	      => $request->description,

		]);


		if ($response) {
			return redirect()->route('checkout.placeorder')->with('succes', ' data is added to database successfully');
		} else {
			return redirect()->route('checkout.placeorder')->with('error', ' data is not-added to database ');
		}
	}

	public function cart()
	{
		if (session()->has('cart'))
			$cart = Cart::create([
				'user_id'       => auth()->user(),
				'product_id'    => session('name'),
				'quantity'      => session('quantity'),
				'amount'         => session('total')
			]);
		$cart->save();
	}
}
