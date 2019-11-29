@extends('layouts.master')
@section('title','餐廳更新')
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

              <form action="rupdate" method="post">
              @foreach($restaurant as $data)
                <h1>餐廳資料修改</h1>
                <div>　</div>
                <div class="form-group">
                <label>
                  
                    餐廳名稱
                      <input readonly class="form-control"
                             type="text"
                             name="rName"
                             placeholder="餐廳名稱"
                             value="{{$data->rName}}"
                  ></label></div>
                  <div class="form-group">
                  <label>
                  
                    餐廳簡述
                      <input class="form-control"
                             type="text"
                             name="rDescription"
                             placeholder="餐廳簡述"
                             value="{{$data->rDescription}}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    營業時間
                      <input class="form-control"
                             type="text"
                             name="rBHour"
                             placeholder="營業時間"
                             value="{{$data->rBHour}}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    推薦菜色
                      <input class="form-control"
                             type="text"
                             name="rOffer"
                             placeholder="推薦菜色"
                             value="{{$data->rOffer}}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    餐廳地點
                      <input class="form-control"
                             type="text"
                             name="rAddress"
                             placeholder="餐廳地點"
                             value="{{$data->rAddress}}"
                  ></label>
                </div>
                <div class="form-group">
                  <label>
                    餐廳相片
                      <input class="form-control"
                             type="text"
                             name="rPhoto"
                             placeholder="餐廳相片"
                             value="{{$data->rPhoto}}"

                  ></label>
                </div>
                <div class="form-group">
                  <label>
                  管理員編號
                      <input readonly class="form-control"
                             name="mid"
                             value="{{session('mid')}}"
                  ></label></div>
                  <div style="form-group">
                  <label>
                    餐廳種類
                    <select style="height:40px;width:40px" name="rType">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                             </select>
                  </label>
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-success">修改</button>
                @endforeach</div></form>
                <div>　</div>
@endsection