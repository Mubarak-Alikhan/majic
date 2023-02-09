<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::Paginate(5);
    return view('admin.category.index', compact('categories'));
  }
  public function add()
  {
    return view('admin.category.add');
  }
  public function store(Request $request)
  {
    $rules = Validator::make($request->all(), [
      'name' => 'required'

    ]);
    if ($rules->fails()) {
      return back()->withErrors($rules);
    }
    $response = Category::create([
      'name'      => $request->name,
      'slug'      => Str::slug($request->name, '_'),
      'status'    => isset($request->status) ? 1 : 0,
    ]);
    if ($response) {
      return redirect()->route('category')->with('success', 'add the category successfully');
    } else {
      return redirect()->route('category')->with('error', 'error while adding category');
    }
    return view('pages.category.create');
  }
  public function edit($id)
  {
    $category  =  Category::findOrFail($id);
    return view('admin.category.edit', compact('category'));
  }
  public function update(Request $request, $id)
  {
    $category = Category::where('id', $id)->update([
      'name'      => $request->name,
      'slug'      => Str::slug($request->name, '_'),
      'status'    => isset($request->status) ? 1 : 0,
    ]);
    if ($category) {
      return redirect()->route('category')->with('success', 'Update the category successfully');
    } else {
      return redirect()->route('category.edit')->with('error', 'error while updating category');
    }
  }
  public function destory($id)
  {
    Category::find($id)->delete();
    return redirect('/admin/category/')->with('success', ' Record Delete successfully.');
  }
}
