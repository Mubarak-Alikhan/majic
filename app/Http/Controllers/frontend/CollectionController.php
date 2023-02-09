<?php

namespace App\Http\Controllers\frontend;

use App\Models\Set;
use App\Models\Style;
use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
	public function index($slug)
	{

		$collections = Collection::where('slug', $slug)->first();
		if ($collections) {
			$products = $collections->products()->simplePaginate(6);
			// dd($products->all());

			$categories = Category::get()->where('status', 1);
			$collections = Collection::get()->where('status', 1);
			$styles = Style::get()->where('status', 1);
			$sets = Set::get()->where('status', 1);
			return view('pages.set.index', compact('products', 'collections', 'styles', 'sets', 'categories'));
		} else {
			return redirect()->back();
		}
	}

	public function singleProduct($slug)
	{
		$products = Product::where('slug', $slug)->first();
		return view('pages.collection', compact('products'));
	}
	public function set_products($slug)
	{
		$sets = Set::where('slug', $slug)->first();
		if ($sets) {
			$products = $sets->products()->simplePaginate(6);
			// dd($products->all());
			$collections = Collection::get();
			$categories = Category::get()->where('status', 1);
			$styles = Style::get()->where('status', 1);
			$sets = Set::get()->where('status', 1);



			return view('pages.set.index', compact('products', 'collections', 'styles', 'sets', 'categories'));
		} else {
			return redirect()->back();
		}
	}

	public function product_style($slug)
	{
		$style = Style::where('slug', $slug)->first();
		if ($style) {
			$products = $style->products()->get();

			$collections = Collection::get();
			$categories = Category::get()->where('status', 1);
			$styles = Style::get()->where('status', 1);
			$sets = Set::get()->where('status', 1);

			return view('pages.style.index', compact('products', 'collections', 'styles', 'sets', 'categories'));
		} else {
			return redirect()->back();
		}
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
