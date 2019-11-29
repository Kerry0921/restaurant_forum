@extends('layouts.master')
@section('title','刪除餐廳資料')
<!--內容-->
@section('content')
                <div style="background-color: yellow;height:352px;width: 100%;position: relative;">
                      <div style="position: absolute;bottom:0;left:25%">
                        <div class="container" style="width: 800px;">
                          <div class="row">
                            <div class="col-sm"></div></div></div></div></div></div> 
                            <div>　　　　　　　　　　　　　　　　</div>
                            

            <div class=out1 style='text-align:center'>
              <form action="restaurantdel" method="get">
                <h1>刪除餐廳</h1>
                @foreach($restaurant as $d)
                <div class="form-group">
                  <label>
                    餐廳名稱
                      <input readonly class="form-control"
                             type="text"
                             name="rName"
                             value="{{$d->rName}}"
                  ></label>
                </div>
                
                <div class="form-group">
                <label>
                    管理員編號
                      <input readonly class="form-control"
                             name="mid"
                             value="{{session('mid')}}"
                  ></label></div>
                </form>
                {!! csrf_field() !!}
                <div><form method="get" action="{{route('deldata')}}"><button type="submit" class="btn btn-secondary" name="deldata" value="{{$d->rName}}">刪除</button>
                </div></form>
               
                @endforeach
                <p></p>
                <div>
@endsection