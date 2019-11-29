@extends('layouts.master')
@section('title','最愛清單')
<!--內容-->
@section('content')
    <!--網頁內容-->
    <div class="container bg-light text-dark">
    <div class="text" style="text-align:center;">
    @if(session()->has('mName'))
    <?php echo session('mName'),"的最愛清單"?>
    @else 
    <div style="color:red;"><h3><?php echo "目前尚未登入" ?></h3></div>
    <div>
    <div>　</div>
    <div>　</div>
    <div>　</div>
    <form method="get" action="{{route('login')}}">
    <button type="submit" class="btn btn-success"><h3 style="color:white;">登入會員</a><h3></button>
    </form>
    </div>
    <div>　</div>
    <div>　</div>
    <div>　</div>
    <form method="get" action="{{route('index')}}">
    <button type="submit" class="btn btn-secondary"><h3 style="color:white;">返回</a><h3></button>
    </form>
    @endif</div>
        <div class="text" style="text-align:left;">
        <p></p>
        <div class="container">
            <div class="row">
            @foreach($restaurant as $favorite)
                <div class="col-2" style="text-align: right;">
                </div>
                <div class="col-8 bg-info  text-white"><p></p>
                    <div class="col-sm" style="font-weight:bolder; font-size: 28px">
                    <a href="detail?detail={{$favorite->rid}}" name="detail" value="{{$favorite->rid}}"><img src="https://dgo9uctxwg500.cloudfront.net/images/480x480%23/zh_TW_dbf3d7abe4.png" style="height: 150px;width: 150px;"></a>
                    <a href="detail?detail={{$favorite->rid}}" name="detail" value="{{$favorite->rid}}" style="color:white;">{{$favorite->rid}}</a>
                        <div><form method="get" action="{{route('unlike')}}"><button type="submit" class="btn btn-primary" value="{{$favorite->rid}}" name="unlike">取消追蹤</button></div></form>
                    </div><p></p>
                </div>
                 <div class="col-2"></div>@endforeach
            </div>
            <p></p>
        </div>
    </div>
@endsection