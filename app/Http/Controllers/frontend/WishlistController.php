<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
	public function index()
	{
		$wishlists =  Wishlist::where('user_id', Auth::id())->get();
		// dd($wishlists);
		return view('pages.wishlist', compact('wishlists'));
	}
	public function update_wishlist(Request $request)
	{
		if ($request->ajax()) {
			$data = $request->all();

			$wishlist = new Wishlist;

			$wishlist->product_id = $data['product_id'];
			$wishlist->user_id = $data['user_id'];
			$wishlist->save();
			return response()->json(['action' => 'add', 'message' => 'product added succesfully ']);
		}
	}
	public function remove_item($id)
	{
		Wishlist::find($id)->delete($id);

		return route('wishlist');
	}
}
