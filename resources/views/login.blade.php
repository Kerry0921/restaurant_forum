@extends('layouts.master')
@section('title','會員登入')
<!--內容-->
@section('content')
                <div style="background-color: yellow;height:352px;width: 100%;position: relative;">
                      <div style="position: absolute;bottom:0;left:25%">
                        <div class="container" style="width: 800px;">
                          <div class="row">
                            <div class="col-sm"></div></div></div></div></div></div> 
                            <div>　　　　　　　　　　　　　　　　</div>
                            

            <div class=out1 style='text-align:center'>
            @include('components.validationErrorMessage')

              <form action="login" method="post">
                <h1>會員登入</h1>
                <div class="form-group">
                  <label>
                    Email
                      <input class="form-control"
                             type="text"
                             name="Email"
                             placeholder="Email"
                             value="{{ old('Email') }}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    密碼
                      <input class="form-control"
                             type="password"
                             name="password"
                             placeholder="密碼"
                             value="{{ old('password') }}"
                  ></label>
                </div>

                <div><a href="register">註冊會員?</a></div>
                <div>　　　　　　　　　　　　　　　　</div>
                <div>　　　　　　　　　　　　　　　　</div>

                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary">登入</button>
                </form></div>
                <div>　　　　　　　　　　　　　　　　</div>
@endsection