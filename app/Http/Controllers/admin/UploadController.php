<?php

namespace App\Http\Controllers\admin;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
	public function index()
	{
		$galleries = Gallery::paginate(5);
		return view('admin.galleries.index', compact('galleries'));
	}
	public function add(Request $request)
	{
		$products = Product::where('status', 1)->get();
		return view('admin.galleries.add', compact('products'));
	}
	public function store(Request $request)
	{

		dd($request->all());

		$files = [];
		if ($request->hasfile('filenames')) {
			foreach ($request->file('filenames') as $file) {
				$name = time() . rand(1, 100) . '.' . $file->extension();
				$file->move(public_path('files'), $name);
				$files[] = $name;
			}
		}

		$response = Gallery::create([
			'product_id'				=> $request->product_id,
			'file'              =>  $file,
			'status'            => isset($request->status) ? 1 : 0,

		]);
	}

	public function edit()
	{
		return view('admin.galleries.edit');
	}
	public function update()
	{
		return view('amdin.galleries.edit');
	}
	public function destory()
	{
		return view('admin.galleries.destory');
	}
}
