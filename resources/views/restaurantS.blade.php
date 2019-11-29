@extends('layouts.master')
@section('title','餐廳管理')
<!--內容-->
@section('content')
                <div style="background-color: yellow;height:352px;width: 100%;position: relative;">
                      <div style="position: absolute;bottom:0;left:25%">
                        <div class="container" style="width: 800px;">
                          <div class="row">
                            <div class="col-sm"></div></div></div></div></div></div> 
                            <div>　　　　　　　　　　　　　　　　</div>
                            

            <div class=out1 style='text-align:center'>
             
                <h1>餐廳管理頁面</h1>
                <div class="form-group">
                <label>
                  
                    會員編號
                      <input readonly class="form-control"
                             
                             value="{{session('mid')}}"
                  ></label></div>


                  <div class="form-group">
                  <label>
                     <a href="restaurantcreate"> <button class="form-control"
                             name="restaurantcreate"
                  >新增餐廳</button></a></label></div>


                  <div class="form-group">
                  <label>
                  <a href="restaurantdel"> <button class="form-control"
                             name="restaurantdel"
                  >刪除餐廳</button></a></label>
                </div>


                  <div class="form-group">
                  <label>
                  <a href="rupdate"><button class="form-control"
                            
                             name="rupdate"
                  >更新餐廳</button></a></label>
                </div>
               
               
                {!! csrf_field() !!}
                <button class="btn btn-secondary">返回</button>
                </div>
                <div>　</div>
@endsection