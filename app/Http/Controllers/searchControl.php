<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\search;

class searchControl extends Controller
{
    public function search($search)
    {
    
    $search = restaurant::where('rName','like','%' .$search. '%')->get();
    $searchdata = [
            'restaurant'=>$search,
    ];
    return view('search',$searchdata);
    } 
}
