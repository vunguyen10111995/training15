<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function xinchao()
    {
    	echo "<h2>Chào Bạn Đây Là Controller</h2>";
    }

    public function myView()
    {
    	return view('MyView');
    }
}
