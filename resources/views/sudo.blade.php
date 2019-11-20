<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>超級使用者界面</title>
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
       
        <p></p>
        
        <div class="container restaurant-navbar">
            <div class="row justify-content-md-center">
                <div class="col-sm text-center bg-light text-dar ">
                </div>
            </div>
        </div>

        
        <p></p>
        <p></p>
        <div class=out1 style='text-align:center'>
        <div class="text" style="text-align:center;">會員類別： 一般會員＝0 , 餐廳管理者＝2 , 超級管理員＝1</div>
        <div>　　　<div>
                <h2>會員管理</h2>
                @foreach($member as $mlist)
                <div  class="form-group">
                <form action="sudome" method="get">
                <label>
                    會員編號
                      <input readonly class="form-control"
                             type="text"
                             name="mid"
                             value="{{$mlist->mid}}"
                  ></label>
                  <label>
                    會員名稱
                      <input readonly class="form-control"
                             type="text"
                             name="mName"
                             value="{{$mlist->mName}}"
                  ></label>
                  <label>
                    會員Email
                      <input readonly class="form-control"
                             type="text"
                             name="Email"
                             value="{{$mlist->Email}}"
                  ></label>
                  <label>
                    會員電話
                      <input readonly class="form-control"
                             type="text"
                             name="Phone"
                             value="{{$mlist->Phone}}"
                  ></label>
                  <label>
                    會員種類
                      <input readonly class="form-control"
                             type="text"
                             name="mType"
                             value="{{$mlist->mType}}"
                  ></label>
                 <button name="sudome" value="{{$mlist->mid}}">修改</button>
                   </form></div>
                   @endforeach</div>
                   {!! csrf_field() !!}

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