@extends('layouts.master')
@section('title','會員註冊')
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
              <form action="register" method="post">
                <h1>註冊</h1>
                <div class="form-group">
                  <label>
                    暱稱
                      <input class="form-control"
                             type="text"
                             name="mName"
                             placeholder="暱稱"
                             value="{{ old('mName') }}"
                  ></label>
                </div>
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
                    電話
                      <input class="form-control"
                             type="text"
                             name="Phone"
                             placeholder="電話"
                             value="{{ old('Phone') }}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    密碼
                      <input class="form-control"
                             type="password"
                             name="password"
                             placeholder="密碼"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    確認密碼
                      <input class="form-control"
                             type="password"
                             name="password_confirm"
                             placeholder="確認密碼"
                  ></label>
                </div>
                <div style="form-group">
                  <label>
                    會員種類
                    <select style="height:50px" name="mType">
                    <option value="0">會員</option>
                    <option value="2">餐廳管理員</option>
                             </select>
                  </label>
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-success">註冊</button>
                </form></div>
                <div>　　　　　　　　　　　　　　　　</div>
@endsection