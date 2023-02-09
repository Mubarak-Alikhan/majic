<?php

namespace App\Http\Controllers\admin;

use App\Models\Style;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StyleController extends Controller
{
	public function index()
	{
		$Styles = Style::paginate(5);
		return view('admin.style.index', compact('Styles'));
	}
	public function add()
	{
		return view('admin.style.add');
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
		$data = Style::create([
			'name' => $request->name,
			'slug' => Str::slug($request->name, '_'),
			'status' => isset($request->status) ? 1 : 0
		]);
		if ($data) {
			return redirect()->route('style')->with('success', 'style Add successfully');
		} else {
			return redirect()->route('style')->with('success', 'style Add successfully');
		}
	}
	public function edit($id)
	{
		$style = Style::findOrFail($id);
		return view('admin.style.edit', compact('style'));
	}
	public function update(Request $request, $id)
	{
		$style = Style::where('id', $id)->update([
			'name' => $request->name,
			'slug' => Str::slug($request->name, '_'),
			'status' => isset($request->status) ? 1 : 0
		]);
		if ($style) {
			return redirect()->route('style')->with('success', 'style update successfully');
		} else {
			return redirect()->route('style')->with('success', 'style not Updated successfully');
		}
	}
	public function destory($id)
	{
		Style::find($id)->delete();
		return redirect('/admin/style/')->with('success', ' Record Delete successfully.');
	}
}
