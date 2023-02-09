<?php

namespace App\Http\Controllers\frontend;

use App\Models\Set;
use App\Models\Style;
use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Subscribed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
	public function index(Request $request)
	{


		$sort = "";
		if ($request->get('sort') !== null) {
			$sort = $request->get('sort');
		}
		if ($request->ajax()) {

			$products = Product::simplePaginate(6);
			$html = view('pages.product.include.post')->with('products', $products)->render();

			return response()->json([
				'message'   => 'product found.',
				'html'      => $html,
			], 200);
		}

		if ($sort == 'name_desc') {
			$products = Product::orderBy('name', 'desc')->get();
			dd($products);
		} elseif ($sort == 'name_asc') {
			$products = Product::orderBy('name', 'asc')->get();
			dd($products);
		} elseif ($sort == 'price_desc') {
			$products = Product::orderBy('selling_price', 'desc')->get();
			dd($products);
		} elseif ($sort == 'price_asc') {
			$products = Product::orderBy('selling_price', 'asc')->get();
			dd($products);
		} elseif ($sort == 'newest') {
			$products = Product::orderBy('created_at', 'desc');
		}



		$categories = Category::get()->where('status', 1);
		$styles = Style::get()->where('status', 1);
		$sets = Set::get()->where('status', 1);
		$collections = Collection::get()->where('status', 1);
		$products = Product::simplePaginate(6);

		return view('pages.product.index', compact('categories', 'sets', 'styles', 'collections', 'products'));
	}

	public function search(Request $request)
	{

		$search = $request->input('search');
		$products = Product::query()
			->where('name', 'LIKE', "%{$search}%")
			->orWhere('selling_price', 'LIKE', "%{$search}%")
			->get();

		$categories = Category::get()->where('status', 1);
		$styles = Style::get()->where('status', 1);
		$sets = Set::get()->where('status', 1);
		$collections = Collection::get()->where('status', 1);
		return view('pages.search.index', compact('categories', 'sets', 'styles', 'collections', 'products'));
	}
}
