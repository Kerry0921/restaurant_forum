@extends('layouts.master')
@section('title','新增評論')
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

              <form action="newcommon" method="post">
                <h1>新增評論</h1>
                <div class="form-group">
                <label>
                      <input hidden class="form-control"
                             type="text"
                             name="fid"
                             value="{{$G}},{{session('mid')}}"
                  ></label></div>
                <div class="form-group">
                <label>
                    餐廳編號
                      <input readonly class="form-control"
                             type="text"
                             name="rid"
                             value="{{$G}}"
                  ></label></div>
                <div class="form-group">
                <label>
                    會員名稱
                      <input readonly class="form-control"
                             type="text"
                             name="mid"
                             value="{{session('mName')}}"
                  ></label></div>
                  <div class="form-group">
                  <label>
                    評論
                      <input class="form-control"
                             type="text"
                             name="common"
                             placeholder="評論"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    分數
                    <select style="height:50px" name="point">
                    <option value="1">1星</option>
                    <option value="2">2星</option>
                    <option value="3">3星</option>
                    <option value="4">4星</option>
                    <option value="5">5星</option>

                             </select>
                  </label>
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-success">新增評論</button>
                </form></div>
                <div>　</div>
@endsection