@extends('layouts.master')
@section('title','會員資料修改')
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

              <form action="memberedit" method="post">@foreach($member as $data)
                <h1>會員資料修改</h1>
                <div class="form-group">
                <label>
                  
                    會員編號
                      <input readonly class="form-control"
                             type="text"
                             name="mid"
                             value="{{$data->mid}}"
                  ></label></div>
                  <div class="form-group">
                  <label>
                  
                    暱稱
                      <input class="form-control"
                             type="text"
                             name="mName"
                             placeholder="暱稱"
                             value="{{$data->mName}}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    Email
                      <input class="form-control"
                             type="text"
                             name="Email"
                             placeholder="Email"
                             value="{{$data->Email}}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    電話
                      <input class="form-control"
                             type="text"
                             name="Phone"
                             placeholder="電話"
                             value="{{$data->Phone}}"
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
                <button type="submit" class="btn btn-success">修改</button>
                @endforeach</form></div>
                <div>　</div>
@endsection