@extends('layouts.master')
@section('title','管理者界面')
<!--內容-->
@section('content')
    <!--網頁內容-->
    <div class="background  bg-light text-dar">
       
        <p></p>
        
        <div class="container restaurant-navbar">
            <div class="row justify-content-md-center">
                <div class="col-sm text-center bg-light text-dar ">
                </div>
            </div>
        </div>

        
        <p></p>
        <p></p>
        <div class=out1 style='text-align:center'>
        <div class="text" style="text-align:center;">會員類別： 一般會員＝0 , 餐廳管理者＝2 , 超級管理員＝1</div>
        <div>　　　<div>
                <h2>會員管理</h2>
                @foreach($member as $mlist)
                <div  class="form-group">
                <form action="sudome" method="get">
                <label>
                    會員編號
                      <input readonly class="form-control"
                             type="text"
                             name="mid"
                             value="{{$mlist->mid}}"
                  ></label>
                  <label>
                    會員名稱
                      <input readonly class="form-control"
                             type="text"
                             name="mName"
                             value="{{$mlist->mName}}"
                  ></label>
                  <label>
                    會員Email
                      <input readonly class="form-control"
                             type="text"
                             name="Email"
                             value="{{$mlist->Email}}"
                  ></label>
                  <label>
                    會員電話
                      <input readonly class="form-control"
                             type="text"
                             name="Phone"
                             value="{{$mlist->Phone}}"
                  ></label>
                  <label>
                    會員種類
                      <input readonly class="form-control"
                             type="text"
                             name="mType"
                             value="{{$mlist->mType}}"
                  ></label>
                 <button name="sudome" value="{{$mlist->mid}}">修改</button>
                   </form></div>
                   @endforeach</div>
                   {!! csrf_field() !!}

    <p>　</p>
@endsection