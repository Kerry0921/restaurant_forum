<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>單一餐廳頁面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--[if lt IE 9]>       
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>       
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>     
  <![endif]-->
</head>

<body>
    <!--網頁LOGO-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            </div>
            <div class="col-md-auto">
            <a href="/"><img src="https://d1gpbxqmt7wq2i.cloudfront.net/asset/mobile/images/logo/header_logo.png" width="200"></a>
            </div>
            <div class="col col-lg-2">
            </div>
        </div>
    </div>
    <p></p>
    <!--網頁內容-->
    <div class="background  bg-light text-dar">
        <div class="text" style="text-align:center;">餐廳資訊</div>
        <p></p>

        <div class="container restaurant-navbar">
            <div class="row justify-content-md-center">
                <div class="col-sm text-center bg-light text-dar  ">
                    訂位
                </div>
                <div class="col-sm  bg-danger text-white text-center  ">
                    資訊
                </div>
                <div class="col-sm text-center bg-light text-dar ">
                    評論
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm" style="text-align: center;">
                <img src="https://dgo9uctxwg500.cloudfront.net/images/1200x1200/R14390_EZTABLE_0313_1_fc0b739f6b.png" style="width:60%;height: 500px;">
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
                    <button type="button " class="btn btn-primary btn-lg btn-block">我要訂位</button>
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
           <a href="https://www.google.com/maps/search/等等在改"><button type="button" class="btn btn-outline-info">查看地圖</button></a>
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
        <!-- <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                人生只有那麼一次，你追求的是什麼呢？
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                是夢想、是理想生活、是一段穩定關係，總之人生就該活的精彩
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-dark" style="font-size:16px;margin-top: 10px;">
                利用一杯咖啡的時間，喚醒生命的熱情
            </div>
        </div> -->
    </div>@endforeach
    <p></p>
    <p></p>
    <p></p>

    <!--頁尾導覽列-->
    <div class="container bg-dark">
        <div class="row">
            <ul class="nav justify-content-left">
                <li class="nav-item">
                    <a class="nav-link active" href="#">關於</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">人才招募</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EZTABL Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">服務條款</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">隱私權政策</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">餐聽合作</a>
                </li>

            </ul>
            <div class="col12 col-md-2"></div>
            <div class="col12 col-md-2">
                <div class="d-flex align-items-center">
                    <div class="col-sm">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                語言選擇
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--頁尾文字資訊-->
    <div class="container bg-dark">
        <div class="row">
            <div class="col">
            </div>
            <div class="col text-warning">
                <h6>台北市信義區基隆路一段178號5樓</h6>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <div class="container bg-dark">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-12 col-md-3 text-warning">
                <h6>taiwan@eztable.com</h6>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <div class="container bg-dark">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-5 text-warning ">
                <p class="h6">週一至週四 10:00 至 19:00，週五 10：00 至 18：00</p>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

</body>

</html>