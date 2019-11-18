<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\index;
use App\common;
use App\favorite;
use Validator;

class indexControl extends Controller
{
    //首頁
public function index()
    {
        // dd(session('mType'));
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

        $likedata = favorite::create([
            'mid'=>session('mid'),
            'rid'=>$like,
        ]);
        return redirect()->route('favorite');
    } 


    //顯示追蹤列表功能
public function favorite()
    {
        $favorite = favorite::where('mid','=',session('mid'))->get();
        $fdata=[
            'restaurant' => $favorite
        ];
        return view('favorite',$fdata);
    }


    //取消追蹤功能
public function unlike(Request $request)
    {
        $unlike = $request->input('unlike');
        // dd($unlike);
        $unlikedata = favorite::where('rid','=',$unlike)->where('mid','=',session('mid'))->delete();
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
        
        //追蹤按鈕改變
        $favo = favorite::where('mid','=',session('mid'))->get();
        $fdata = [
            'favorite'=>$favo,
        ];
        //追蹤人數
        $count = favorite::where('rid','=',$d)->count();
        return view('restaurant',$detaildata,compact('count'));
    }

    //餐廳相關界面
    public function restaurantS()
    {
            return view('restaurantS');
    }
    
    //新增餐廳頁面
    public function restaurantcreate()
    {
            return view('restaurantcreate');
    }

    //新增餐廳
    public function createdata()
    {
        $input = request()->all();
         //資料驗證
         $rules = [
            'rName'=>[
                'required',
                'max:50',
            ],
            'rDescription'=>[
                'required',
                'max:300',
            ],
            'rBHour'=>[
                'required',
                'max:50',
            ],
            'rOffer'=>[
                'required',
                'max:50',
            ],
            'rAddress'=>[
                'required',
                'max:50',
            ],
            'rPhoto'=>[
                'required',
                'max:50',
            ],
            'mid'=>[
                'unique:index',
                'required',
                'max:50',
            ],
            'rType'=>[
                'required',
                'max:20',
            ],
            
        ];
        //驗證
        $validator= Validator::make($input,$rules);
        if($validator->fails()){
            //驗證錯誤判斷式
            return redirect('/restaurantcreate')->withErrors($validator)->withInput();
        }
        $restaurant = index::create($input);
        return redirect('createsuccess');
    }
    public function createsuccess()
    {
        return view('createsuccess');
    }

     //刪除餐廳頁面
     public function restaurantdel()
     {
        $del = session('mid');
        $d = index::where('mid','=',$del)->get();
        $data = [
            'restaurant'=>$d,
        ];
        // dd($data);
        return view('restaurantdel',$data);
     }
     //刪除餐廳
     public function deldata(Request $request)
     {
        $deldata = $request->input('deldata');
        // if($resdeldata = index::where('rName','=','')){
        //     return redirect('restaurantS');
        // }
        $resdeldata = index::where('rName','=',$deldata)->where('mid','=',session('mid'))->delete();
        return redirect('restaurantS');
     }
     
     //修改餐廳界面
     public function rupdate()
  {
    $U = session('mid');
    $edit = index::where('mid','=',$U)->get();
    $data =[
        'restaurant'=>$edit,
        ];
        //  dd($data);
      return view('rupdate',$data);
  }  
     //修改餐廳資料
     public  function upsave(Request $request)
     {
       $input = $request->except(['_token']);
   
       //資料驗證
       $rules = [
        'rName'=>[
            'required',
            'max:50',
        ],
        'rDescription'=>[
            'required',
            'max:300',
        ],
        'rBHour'=>[
            'required',
            'max:50',
        ],
        'rOffer'=>[
            'required',
            'max:50',
        ],
        'rAddress'=>[
            'required',
            'max:50',
        ],
        'rPhoto'=>[
            'required',
            'max:50',
        ],
        'mid'=>[
            'unique:index',
            'required',
            'max:50',
        ],
        'rType'=>[
            'required',
            'max:20',
        ],
        
    ];
       //驗證
       $validator= Validator::make($input,$rules);
   
       if($validator->fails()){
           //驗證錯誤判斷式
           return redirect('/rupdate')->withErrors($validator)->withInput();
       }
       
       //修改
       $edit = index::where('mid','=',$input['mid'])->
    //    dd($input['rName']);
       update([
           'rName'=>$input['rName'],
           'rDescription'=>$input['rDescription'],
           'rBHour'=>$input['rBHour'],
           'rOffer'=>$input['rOffer'],
           'rAddress'=>$input['rAddress'],
           'rPhoto'=>$input['rPhoto'],
           'mid'=>$input['mid'],
           'rType'=>$input['rType'],
       ]);
       return redirect('restaurantS');
     }

     //評論區
     public function common(Request $request)
     {
         
         $C = $request->input('common');
         $rid =common::where('rid','=',$C)->get();
         $passrid = $C;
        //  dd($passrid);
         $data =[
            'allcommon'=>$rid,
         ];
          return view('common',$data,compact('passrid'));
     }

     //新增評論畫面
     public function newcommon(Request $request)
     {
         $G = $request->input('newcommon');
          return view('newcommon',compact('G'));
     }

    //新增評論
    public function commonsave(Request $request)
      {
        $input = request()->all();
        //資料驗證
        // dd($input);
        $rules = [
           'common'=>[
               'required',
               'max:50',
           ],
           'mid'=>[
            'unique:common',
            'required',
           ],
       ];
       //驗證
       $validator= Validator::make($input,$rules);
       if($validator->fails()){
           //驗證錯誤判斷式
           return redirect('newcommon')->withErrors($validator)->withInput();
       }
       $common = common::create($input);
       return redirect('cssuccess');
   }
      public function cssuccess()
      {
        return view('cssuccess');
      }
}
