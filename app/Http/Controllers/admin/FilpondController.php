<?php

namespace App\Http\Controllers\admin;

use App\Models\Gallary;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FilpondController extends Controller
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
		// dd($request);
		$temp_file = TemporaryFile::where('folder', $request->file)->first();
		if ($temp_file) {
			Storage::Copy('upload/temp/' . $temp_file->folder . '/' . $temp_file->file, 'upload/product' . $temp_file->folder . '/' . $temp_file->file);

			$response = Gallery::create([
				'product_id'				=> $request->product_id,
				'file'              => $temp_file->folder . '/' . $temp_file->file,
				'status'            => isset($request->status) ? 1 : 0,

			]);
			$response->save();
			Storage::deleteDirectory('upload/temp/' . $temp_file->folder);
			$temp_file->delete();
		}
	}

	public function filepondStore(Request $request)
	{
		if ($request->has('file')) {
			$image = $request->file('file');
			$file_name = $image->getClientOriginalName();
			$folder = uniqid('post', true);
			$image->storeAs('upload/tmp' . $folder, $file_name);
			TemporaryFile::create([
				'folder' => $folder,
				'file' => $file_name
			]);
			return $folder;
		}
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
