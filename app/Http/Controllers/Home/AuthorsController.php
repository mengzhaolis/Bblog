<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
class AuthorsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
    	$them=env('DEFAULT_THEM','Pithy');
        return view('Themes/'.$them.'Home/authors_detail');
    }
}
