<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "success" => true,
                    "redirect_location" => url('http://majic.test/admin/dashboard'),
                    "message"   => "login successfully"
                ], 200);
            } else {
                return response()->json([[
                    "success" => false,
                    "message" => "Invalid credentials"
                ]], 422);
            }
        }
    }
}
