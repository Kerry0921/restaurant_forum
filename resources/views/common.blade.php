<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>餐廳資訊</title>
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
                <form method="get" action="{{route('newcommon')}}" name="newcommon" value="{{$passrid}}">
                <a href="/newcommon"><button type='submit' name="newcommon" value="{{$passrid}}"> 新增評論 </button></a>
                   </form> </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm" style="text-align: center;">
                <img src="https://dgo9uctxwg500.cloudfront.net/images/1200x1200/R14390_EZTABLE_0313_1_fc0b739f6b.png" style="width:60%;height: 500px;">
            </div>
        </div>
        <p></p>
        <p></p>
        <div class=out1 style='text-align:center'>
              <form action="common" method="get">
                <h1>全部評論</h1>
                

                <div  class="form-group">
                <label>
                  
                    會員編號
                    @foreach($allcommon as $data)
                      <input readonly class="form-control"
                             type="text"
                             name="mid"
                             
                             value="{{$data->mid}}"
                  >@endforeach</label>
                  <label>
                  
                    評論
                    @foreach($allcommon as $data)
                      <input readonly class="form-control"
                             type="text"
                             name="common"
                             value="{{$data->common}}"
                  >@endforeach</label>
                  <label>
                    分數
                    @foreach($allcommon as $data)
                      <input readonly class="form-control"
                             type="text"
                             name="point"
                             value="{{$data->point}}"
                  >@endforeach</label>
                </div>
                
               </form> </div>
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