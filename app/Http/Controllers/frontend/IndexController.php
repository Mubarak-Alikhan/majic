<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Set;
use App\Models\Style;

class IndexController extends Controller
{
    public function index()
    {

        return view('pages.index');
    }
}
