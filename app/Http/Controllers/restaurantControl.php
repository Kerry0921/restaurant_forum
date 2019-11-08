<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurant;
class restaurantControl extends Controller
{
    
        public function index()
        {
        $rAddress = restaurant::where('rid','=',$rName)->value('rAddress');
        return view('restaurant',compact('rAddress'));
        } 
    
    
}
