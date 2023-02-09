<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Nette\Utils\Random;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Set;
use App\Models\Style;
use App\Models\Variant;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
	public function index()
	{
		$products = Product::paginate(5);

		return view('admin.product.index', compact('products'));
	}
	public function add()
	{
		$styles = Style::where('status', 1)->get();
		$categories = Category::where('status', 1)->get();

		$variants = Variant::where('status', 1)->get();
		return view('admin.product.add', compact('categories', 'styles', 'variants'));
	}
	public function store(Request $request)
	{
		// dd($request->all());
		$rules = [
			'name' 						=> 'required',
			'description' 		=> 'required',
			'material' 				=> 'required',
			'selling_price' 	=> 'required',

		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return validator()->errors()->all();
		}
		if ($request->hasFile('image')) {
			$img = $request->image;
			$num = rand(1, 999);
			$number = $num / 7;
			$extension = $img->extension();
			$filNewName = date('Y-M-D') . "_." . $number . "_." . $extension;
			$filenamepath = 'image/' . $filNewName;
			$filepath = $img->move(public_path('image/'), $filenamepath);
		}
		$response = Product::create([
			'image' 						=> $filenamepath,
			'name' 					    => $request->name,
			'category_id'				=> $request->category_id,
			'description'				=> $request->description,
			'selling_price'			=> $request->selling_price,
			'material'				  => $request->material,
			'last_price'				=> $request->last_price,
			'status'				    => isset($request->status) ? 1 : 0,
			'slug' 						  => Str::slug($request->name, '_'),
		]);
		if ($request->has('style_id'))
			$response->styles()->attach($request->style_id);


		if ($request->has('variant_id'))
			$response->variants()->attach($request->variant_id);

		if ($response) {
			return redirect()->route('product')->with('succes', ' data is added to database successfully');
		} else {
			return redirect()->route('product.add')->with('succes', ' data is not add to database');
		}
		return view('admin.product.add');
	}
	public function edit($id)
	{
		$products = Product::findOrFail($id);
		$collections = Collection::where('status', 1)->get();
		$categories = Category::where('status', 1)->get();
		$sets = Set::where('status', 1)->get();
		$variants = Variant::where('status', 1)->get();
		$styles = Style::where('status', 1)->get();
		return view('admin.product.edit', compact('products', 'categories', 'variants', 'styles', 'collections', 'sets'));
	}
	public function update(Request $request, $id)
	{
		$product = Product::where('id', $id)->update([
			'name' 					    => $request->name,

			'description'				=> $request->description,
			'selling_price'			=> $request->selling_price,
			'material'				  => $request->material,
			'Last_price'				=> $request->Last_price,
			'status'				    => isset($request->status) ? 1 : 0,
			'slug' 						  => Str::slug($request->name, '_'),
		]);

		if ($request->has('style_id'))
			$product->styles()->attach($request->style_id);
		if ($product) {
			return redirect()->route('product')->with('success', 'Update the product successfully');
		} else {
			return redirect()->route('product.edit')->with('error', 'error while updating product');
		}

		return view('admin.product.edit');
	}
	public function destory($id)
	{
		Product::find($id)->delete();
		return redirect('/admin/product/')->with('success', ' Record Delete successfully.');
	}
}
