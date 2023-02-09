<?php

namespace App\Http\Controllers\frontend;

use App\Models\Set;
use App\Models\Style;
use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetail extends Controller
{
	public function index()
	{
		return view('pages.details');
	}
	public function category_product($slug)
	{
		$category = Category::where('slug', $slug)->first();
		if ($category) {
			$products = $category->products()->simplePaginate(6);

			// dd($products->all());
			$collections = Collection::get();
			$categories = Category::get()->where('status', 1);
			$styles = Style::get()->where('status', 1);
			$sets = Set::get()->where('status', 1);
			$categories = Category::get()->where('status', 1);
			return view('pages.category.index', compact('products', 'collections', 'styles', 'sets', 'categories'));
		} else {
			return redirect()->back();
		}
	}
	public function singleProduct($slug)
	{
		$products = Product::where('slug', $slug)->first();
		return view('pages.details', compact('products'));
	}
}
