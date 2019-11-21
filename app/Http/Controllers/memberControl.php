<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;  //驗證器
use Hash;       //密碼加密
use App\member; //member 的 model

class memberControl extends Controller
{
    //註冊畫面
    public function register()
    {
        return view('register');
    }

    //註冊資料
    public function regisdata()
    {
        //接收資料
        $input = request()->all();
        
        //資料驗證
        $rules = [
            //暱稱
            'mName'=>[
                'required',  //required 是必填的意思
                'max:50',
            ],
            //Email
            'Email'=>[
                'required',
                'unique:member',
                'max:150',
                'email',
            ],
            //電話
            'Phone'=>[
                'required',
                'min:10',
            ],
            //密碼
            'password'=>[
                'required',
                'same:password_confirm',
                'min:6',
            ],
            //密碼驗證
            'password_confirm'=>[
                'required',
                'min:6',
            ],
            //會員種類
            'mType'=>[
                'required',
            ],
            
        ];
        //驗證
        $validator= Validator::make($input,$rules);

        if($validator->fails()){
            //驗證錯誤判斷式
            return redirect('/register')->withErrors($validator)->withInput();
        }
        //密碼加密
        $input['password'] = Hash::make($input['password']);

        //新增資料
        $member = member::create($input); 
        
        return redirect('authsuccess');
    }

    //註冊成功畫面
    public function authsuccess()
    {
        return view('authsuccess');
    }
///////////////我是分隔線///////////////我是分隔線///////////////我是分隔線///////////////我是分隔線///////////////我是分隔線///////////////我是分隔線///////////////
    
    //登入畫面
    public function login()
    {
        return view('login');
    }

    //登入資料驗證
    public function logindata()
    {
    $input = request()->all();

    $rules = [
        //Email
        'Email' => [
            'required',
            'max:150',
            'email',
        ],

        //密碼
        'password' =>[
            'required',
            'min:6',
        ],
    ];
    $validator = Validator::make($input,$rules);
    if($validator->fails()){
        return redirect('/login')->withErrors($validator)->withInput();
        }
        //撈會員資料
    $member = member::where('Email',$input['Email'])->firstOrFail();
        //檢查密碼
    $is_password_correct = Hash::check($input['password'],$member->password);
    if(!$is_password_correct){
            $error_message =[
                'msg' => [
                    '密碼驗證錯誤'
                ],
            ];
        return redirect('/login')->withErrors($error_message)->withInput(); }
    
        //定義session方法
    session()->put('mName',$member->mName);
    session()->put('mid',$member->mid);
    session()->put('mType',$member->mType);
    
        return redirect('/');
    }

    //登出
    public function logout()
    {
        session()->forget('mName');
        session()->forget('mid');
        session()->forget('mType');
        return redirect('/');
    }

    //修改會員資料界面
  public function memberedit()
  {
    $N = session('mid');
    $edit = member::where('mid','=',$N)->get();
    $data =[
        'member'=>$edit,
        ];
        //  dd($data);
      return view('memberedit',$data);
  }  
   //修改會員資料
  public  function membereditsave()
  {
    $input = request()->except(['_token']);

    //資料驗證
    $rules = [
        //暱稱
        'mName'=>[
            'required',  //required 是必填的意思
            'max:50',
        ],
        //Email
        'Email'=>[
            'required',
            'max:150',
            'email',
        ],
        //電話
        'Phone'=>[
            'required',
            'min:10',
        ],
        
        //會員種類
        'mType'=>[
            'required',
        ],
        
    ];
    //驗證
    $validator= Validator::make($input,$rules);

    if($validator->fails()){
        //驗證錯誤判斷式
        return redirect('/memberedit')->withErrors($validator)->withInput();
    }
    
    //修改
    // $member = member::where('mid','=',session('mid'))->save($input)->all();
    $medit = member::where('mid','=',$input['mid'])->
    // dd($input['mid']);
    update([
        'mName'=>$input['mName'],
        'Email'=>$input['Email'],
        'Phone'=>$input['Phone'],
        'mType'=>$input['mType'],
    ]);
    return redirect('memberedit');
  }
      //超級使用者界面
      public function sudo()
      {
          $mlist=member::all();
          $mdata =
          [
              'member' => $mlist,
          ];
          return view('sudo',$mdata);
      }

      //會員修改界面
      public function sudome(Request $request)
      {
          $M=$request->input('sudome');
          $edit=member::where('mid','=',$M)->get();
          $edata =
          [
              'Emember' => $edit,
          ];
          return view('sudome',$edata);
      }
      //修改會員資料
      public  function sudomesave()
      {
    $input = request()->except(['_token']);
    $medit = member::where('mid','=',$input['mid'])->
    update([
        'mName'=>$input['mName'],
        'Email'=>$input['Email'],
        'Phone'=>$input['Phone'],
        'mType'=>$input['mType'],
      ]);
    return redirect('sudo');
  }
}
