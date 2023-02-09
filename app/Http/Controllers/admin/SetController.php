<?php

namespace App\Http\Controllers\admin;

use App\Models\Set;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SetController extends Controller
{
	public function index()
	{
		$sets = Set::paginate(5);
		return view('admin.set.index', compact('sets'));
	}
	public function add()
	{
		$products = Product::where('status', 1)->get();
		return view('admin.set.add', compact('products'));
	}
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required'
		]);
		if ($validator->fails()) {
			return
				$validator->errors()->all();
		}
		$sets = Set::create([
			'name' => $request->name,
			'slug' => Str::slug($request->name, '_'),
			'status' => isset($request->status) ? 1 : 0
		]);
		if (!empty($sets) && is_object($sets))
			$sets->products()->sync($request->product_id);
		if ($sets) {
			return redirect()->route('set')->with('success', 'set Add successfully');
		} else {
			return redirect()->route('set')->with('success', 'set Add successfully');
		}
	}
	public function edit($id)
	{
		$set = Set::findOrFail($id);
		return view('admin.set.edit', compact('set'));
	}
	public function update(Request $request, $id)
	{
		$set = Set::where('id', $id)->update([
			'name' => $request->name,
			'slug' => Str::slug($request->name, '_'),
			'status' => isset($request->status) ? 1 : 0
		]);
		if ($set) {
			return redirect()->route('set')->with('success', 'set update successfully');
		} else {
			return redirect()->route('set')->with('success', 'set not Updated successfully');
		}
	}
	public function destory($id)
	{
		Set::find($id)->delete();
		return redirect('/admin/set/')->with('success', ' Record Delete successfully.');
	}
}
