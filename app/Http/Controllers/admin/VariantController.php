<?php

namespace App\Http\Controllers\admin;

use App\Models\Variant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VariantController extends Controller
{
	public function index()
	{
		$variants = Variant::paginate(5);
		return view('admin.variant.index', compact('variants'));
	}
	public function add()
	{
		return view('admin.variant.add');
	}
	public function store(Request $request)
	{
		$rules = Validator::make($request->all(), [
			'color_name' => 'required'

		]);
		if ($rules->fails()) {
			return back()->withErrors($rules);
		}
		$response = Variant::create([
			'color_name'      => $request->color_name,
			'slug'      			=> Str::slug($request->color_name, '_'),
			'status'    			=> isset($request->status) ? 1 : 0,
		]);
		if ($response) {
			return redirect()->route('variant')->with('success', 'add the category successfully');
		} else {
			return redirect()->route('variant')->with('error', 'error while adding category');
		}
		return view('pages.variant.create');
	}
	public function edit($id)
	{
		$variants  =  Variant::findOrFail($id);
		return view('admin.variant.edit', compact('variants'));
	}
	public function update(Request $request, $id)
	{
		$category = Variant::where('id', $id)->update([
			'name'      => $request->name,
			'slug'      => Str::slug($request->name, '_'),
			'status'    => isset($request->status) ? 1 : 0,
		]);
		if ($category) {
			return redirect()->route('variant')->with('success', 'Update the variant successfully');
		} else {
			return redirect()->route('variant.edit')->with('error', 'error while updating variant');
		}
	}
	public function destory($id)
	{
		Variant::find($id)->delete();
		return redirect('/admin/variant/')->with('success', ' Record Delete successfully.');
	}
}
