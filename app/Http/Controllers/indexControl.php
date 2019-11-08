<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\index;

class indexControl extends Controller
{
    //首頁
public function index()
    {
        $index = index::all();
        $data = [
            'restaurant'=>$index,
    ];
        return view('index',$data);
    } 


    //搜尋功能
public function search(Request $request)
    {
        $s = $request->input('search');
        $searchback = index::where('rName','like','%'.$s.'%')->get();
    
        $sdata = [
            'restaurant'=>$searchback,
        ];

        return view('search',$sdata);
    } 


    //篩選功能（固定數值）
public function selection(Request $request)
    {
        $slt = $request->input('select');
        $select = index::where('rType','=',$slt)->get();
        $data =[
        'restaurant'=>$select,
        ];

        return view('select',$data);
    }


    //追蹤功能
public function like(Request $request)
    {
        $like = $request->input('like');
        $likedata = index::where('rName','=',$like)->update(['rFavorite' => 1]);
        return redirect()->route('index');
    } 


    //顯示追蹤列表功能
public function favorite()
    {
        $favorite = index::where('rFavorite','=','1')->get();
        $fdata=[
            'restaurant' => $favorite
        ];
        return view('favorite',$fdata);
    }


    //取消追蹤功能
public function unlike(Request $request)
    {
        $unlike = $request->input('unlike');
        $unlikedata = index::where('rName','=',$unlike)->update(['rFavorite' => 0]);
        return redirect()->route('favorite');
    } 
    

    //查看餐廳資訊功能
public function detail(Request $request)
    {
        $d = $request->input('detail');
        $detail = index::where('rName','=',$d)->get();
        $detaildata=[
            'restaurant' => $detail
        ];
        return view('restaurant',$detaildata);
    }
}
