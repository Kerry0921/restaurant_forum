@extends('layouts.master')
@section('title','餐廳資訊')
<!--內容-->
@section('content')
    <!--網頁內容-->
    <div class="background  bg-light text-dar">
<p>　</p>
        <div class="text" style="text-align:center;"><h3>{{$d}} 的餐廳資訊</h3></div>
<p>　</p>

        <div class="container restaurant-navbar">
            <div class="row justify-content-md-center ">
                <div class="col-sm text-center bg-light text-dar">
                
                <h6>追蹤人數：{{$count}} </h6>
                </div>
                <div class="col-sm  bg-danger text-white text-center ">
                    資訊 
                </div>
                @foreach($restaurant as $detaildata)
                <div class="col-sm text-center bg-light text-dar ">
                <form method="get" action="{{route('common')}}" name="common" value="{{$detaildata->rid}}">
                <button class="btn btn-secondary" type='submit' name="common" value="{{$detaildata->rid}}"> 全部評論 </button></a>
                   </form></div>  @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-sm" style="text-align: center;">
                <img src="https://dgo9uctxwg500.cloudfront.net/images/1200x1200/R14390_EZTABLE_0313_1_fc0b739f6b.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <p></p>

        <div class="container restaurant-name">
            <div class="row">@foreach($restaurant as $detaildata)
                <div class="col-sm font-weight-bold text-dark" style="font-size:18px;">
                    {{$detaildata->rName}}
                </div>
            </div>
        </div>
        <div class="container restaurant-note">
            <div class="row">
                <div class="col-sm font-weight-bold text-muted" style="font-size:15px">
                {{$detaildata->rOffer}}
                </div>
            </div>
        </div>
        <p></p>
        <div class="container restaurant-bookingbutton">

            <div class="row">
                <div class="col-sm">
                @include('components.validationErrorMessage')

                @if(session()->has('mid'))
                
                <form method="get" action="{{route('like')}}">
                <button   type="submit" class="btn btn-primary" value="{{$detaildata->rName}}" name="like">追蹤</button></a>
                </form>
                    
                @endif
                
                </div>
            </div>
        </div>
        <p></p>
        <p></p>
    </div>
    <div class="container">
        <div class="row bg-light text-dark">
            <div class="col-sm font-weight-bold restaurant-location" style="font-size:18px;">
                餐廳地點
            </div>
            <div class="col-sm" style="text-align: right;">
           <a href="https://www.google.com/maps/search/{{$detaildata->rAddress}}" target="_blank" title="{{$detaildata->rName}}"><button type="button" class="btn btn-outline-info">查看地圖</button></a>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm restaurant-address text-dark" style="font-size:16px ;margin-top: 10px;">
                地址
            </div>
        </div>
        <div class="row">
            <div class="col-sm restaurant-address text-dark" style="font-size:16px ;margin-top: 10px;">{{$detaildata->rAddress}}</div>
        </div>
    </div>
    <p></p>

    <div class="container">
        <div class="row">
            <div class="col-sm  text-dark" style="font-size:16px; margin-top: 10px;">
                交通方式
            </div>
        </div>
        <div class="row">
            <div class="col-sm  text-dark" style="font-size:16px; margin-top: 10px;">位在長安東路二段松江南京站附近，中山女高的對面巷弄裡，從松江南京站步行過來大約7分鐘，交通非常方便</div>
        </div>
    </div>
    <p></p>

    <div class="container">
        <div class="row bg-light text-dark">
            <div class="col-sm font-weight-bold" style="font-size:18px;">
                專屬優惠
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                EZCASH 紅利回饋
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                預訂 EZTABLE 獨家方案，預付最高可享 5% EZCASH 回饋
            </div>
        </div>

    </div>
    <p></p>
    <div class="container">
        <div class="row  bg-light text-dark">
            <div class="col-sm font-weight-bold" style="font-size:18px;">
                菜色介紹
            </div>
        </div>
    </div>
    <p></p>

    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                適合聚餐類型
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                商業聚餐, 家庭聚餐, 團體聚餐, 朋友聚餐
            </div>
        </div>

    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                料理種類
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                西式料理, 美式料理, 下午茶, 早午餐
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                推薦菜色
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                -黑糖珍珠鮮奶-西西里冰釀咖啡
            </div>
        </div>

    </div>
    <p></p>
    <div class="container ">
        <div class="row bg-light text-dark">
            <div class="col-sm font-weight-bold" style="font-size:18px;">
                餐廳資訊
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                消費價位
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                $50 ~ $300
            </div>
        </div>
    </div>
    <p></p>

    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                營業時間
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                [早午餐] 週日 09:00-14:00 [全天開放] 週一 - 週四 07:00-18:30
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                用餐須知
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                星期六公休
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                服務
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                有付費停車場, Wi-Fi, 無障礙空間, 信用卡
            </div>
        </div>

    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                餐廳描述
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
            {{$detaildata->rDescription}}
            </div>
        </div>
        
    </div>@endforeach
    <p></p>
    <p></p>
    <p></p>
@endsection