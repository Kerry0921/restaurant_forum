<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\favorite;

class favoControl extends Controller
{
    public function findex()
    {
        //$rid = 拉出買溪口的資料;
        $rid = favorite::where('fid','=','1')->value('rid');
       return view('favorite',compact('rid'));

    }
}
