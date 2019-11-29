@extends('layouts.master')
@section('title','餐廳評論')
<!--內容-->
@section('content')
    <!--網頁內容-->
    <div class="background  bg-light text-dar">
<p>　</p>
        <div class="text" style="text-align:center;"><h3>全部評論</h3></div>
<p>　</p>
        <div class="container restaurant-navbar">
            <div class="row justify-content-md-center">
                <div class="col-sm text-center bg-light text-dar  ">
                    訂位
                </div>
                <div class="col-sm  bg-danger text-white text-center  ">
                    餐廳評論
                </div>
                
                <div class="col-sm text-center bg-light text-dar ">
                <form method="get" action="{{route('newcommon')}}" name="newcommon" value="{{$passrid}}">
                <button class="btn btn-primary" type='submit' name="newcommon" value="{{$passrid}}"> 新增評論 </button>
                   </form> </div>
            </div>
        </div>

        <div class="row">
        <div class="col-sm" style="text-align: center;">
                <img src="https://dgo9uctxwg500.cloudfront.net/images/1200x1200/R14390_EZTABLE_0313_1_fc0b739f6b.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <p></p>
        <p></p>
        <div class=out1 style='text-align:center'>
        
              <form action="common" method="get">
                

                <div  class="form-group">
<div class="container">
<hr>
<div class="row bg-light text-dark">

@foreach($allcommon as $data)
<div class="col-sm font-weight-bold" style="font-size:18px;">用戶：{{$data->mid}}
/{{$data->point}}星</div>
<div class="container">
<div class="row">
<div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
{{$data->common}}
</div>
</div>
<hr>
@endforeach
</div>
</div>
</div>
@endsection