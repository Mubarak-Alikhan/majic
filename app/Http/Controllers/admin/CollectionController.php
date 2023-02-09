<?php

namespace App\Http\Controllers\admin;

use Collator;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class CollectionController extends Controller
{
  public function index()
  {
    $collections = Collection::paginate(5);
    return view('admin.collection.index', compact('collections'));
  }

  public function add()
  {
    $products = Product::where('status', 1)->get();
    return view('admin.collection.add', compact('products'));
  }

  public function store(Request $request)
  {
    $rules = [
      'name' => 'required',
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      return
        $validator->errors()->all();
    }

    $collections = Collection::create([
      'name'        => $request->name,
      'slug'        => Str::slug($request->name, '_'),
      'status'      => isset($request->status) ? 1 : 0,
    ]);
    if (!empty($collections) && is_object($collections))
      $collections->products()->sync($request->product_id);

    return redirect()->route('collection')->with('success', 'collection Add successfully');
  }
  public function edit($id)
  {
    $collection = Collection::findOrFail($id);
    $products = Product::where('status', 1)->get();
    return view('admin.collection.edit', compact('collection', 'products'));
  }
  public function update(Request $request, $id)
  {
    $collection = Collection::where('id', $id)->update([
      'name' => $request->name,
      'slug' => Str::slug($request->name, '_'),
      'status' => isset($request->status) ? 1 : 0,
    ]);
    if ($collection) {
      return redirect()->route('collection')->with('success', 'Update the collection successfully');
    } else {
      return redirect()->route('collection.edit')->with('error', 'error while updating collection');
    }
  }
  public function destory($id)
  {
    Collection::find($id)->delete();
    return redirect('/admin/collection/')->with('success', ' Record Delete successfully.');
  }
}
