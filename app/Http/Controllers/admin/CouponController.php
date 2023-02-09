<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
	public function index()
	{
		$coupons = Coupon::Paginate(5);
		return view('admin.coupon.index', compact('coupons'));
	}
	public function add()
	{
	}
	public function store()
	{
	}
	public function edit()
	{
	}
	public function update()
	{
	}
	public function destory()
	{
	}
}
