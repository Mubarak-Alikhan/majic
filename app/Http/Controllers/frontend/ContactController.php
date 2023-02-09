<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscribed;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
	public function index()
	{
		return view('pages.contact');
	}
	public function store(Request $request)
	{
		$rules = [
			'name'      => 'required|max:100',
			'email'     => 'required|email',
			'phone'     => 'required',
			'subject'   => 'required|',
			'message'   => 'required|'
		];

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return back()->withErrors($validator);
		}

		$response = Contact::create([
			'name'          => $request->name,
			'email'         => $request->email,
			'phone'         => $request->phone,
			'subject'       => $request->subject,
			'message'       => $request->message,
		]);

		return redirect()->back()->with('message', 'contact data Upload Successfully');
	}
	public function subscription_box(Request $request)
	{
		$rules = [

			'email'     => 'required|email',

		];

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return back()->withErrors($validator);
		}

		$response = Subscribed::create([

			'email'         => $request->email,

		]);
		return redirect()->back()->with('message', 'contact data Upload Successfully');
	}
}
