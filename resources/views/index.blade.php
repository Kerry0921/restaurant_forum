<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>餐廳首頁</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--[if lt IE 9]>       
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>       
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>     
  <![endif]-->
</head>

<div>
    <!--網頁最上面-->
    <div class="container">
        <!--<div class="row">-->
        <div class="d-flex justify-content-around">
            <div class="col-sm">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        選擇分類
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="＃">Action</a>
                        <a class="dropdown-item" href="＃">Another action</a>
                        <a class="dropdown-item" href="＃">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <img src="https://d1gpbxqmt7wq2i.cloudfront.net/asset/mobile/images/logo/header_logo.png" width="200">
            </div>
            <div class="d-flex align-items-center">
                <div class="col-sm">
                    <div class="dropdown">
                       <a href="favorite"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            最愛清單
                        </button></a> 
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="favorite">Action</a>
                            <a class="dropdown-item" href="favorite">Another action</a>
                            <a class="dropdown-item" href="favorite">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--搜尋功能+背景-->
    <div class="container">
        <img src="https://www.alipayhk.com/wp-content/uploads/2019/09/Desktop-Inner-page-banner-CN.png" class="img-fluid" alt="Responsive image">
    </div>
    <!--高雄美食設定-->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h4 class="display-4">Kaohsiung City美食</h4>
            </div>
        </div>


        <!--高雄美食內容-->
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1ralsognjng37.cloudfront.net/f0249d1a-05c2-4df9-ab11-7470cb4233f0.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">麥當勞</h3>
                        <p class="card-text">$.美式美食</p>
                        <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1ralsognjng37.cloudfront.net/f0249d1a-05c2-4df9-ab11-7470cb4233f0.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">麥當勞</h3>
                        <p class="card-text">$.美式美食</p>
                        <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1ralsognjng37.cloudfront.net/f0249d1a-05c2-4df9-ab11-7470cb4233f0.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">麥當勞</h3>
                        <p class="card-text">$.美式美食</p>
                        <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1ralsognjng37.cloudfront.net/f0249d1a-05c2-4df9-ab11-7470cb4233f0.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">麥當勞</h3>
                        <p class="card-text">$.美式美食</p>
                        <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1ralsognjng37.cloudfront.net/f0249d1a-05c2-4df9-ab11-7470cb4233f0.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">麥當勞</h3>
                        <p class="card-text">$.美式美食</p>
                        <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://d1ralsognjng37.cloudfront.net/f0249d1a-05c2-4df9-ab11-7470cb4233f0.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">麥當勞</h3>
                        <p class="card-text">$.美式美食</p>
                        <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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