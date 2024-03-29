<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
                      <!--主要內容-->

@include('components.validationErrorMessage')

                <div class="d-flex align-items-center">
                  <div class="col-sm">
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  選擇分類
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="select?select=1" name="select">1</a>
                                <a class="dropdown-item" href="select?select=2" name="select">2</a>
                                <a class="dropdown-item" href="select?select=3" name="select">3</a>
                                 
                                </div>
                              </div>
                  </div>
                  
                  <div class="col col-center" style="text-align: center;">
                  <a href ="/"><img src="https://d1gpbxqmt7wq2i.cloudfront.net/asset/mobile/images/logo/logo_moments_zh.png" width="200"></a>                  </div>
                  <div class="col-sm"  class="dropdown" style="text-align: right;">
                  @if(session()->has('mName'))
                  <span style="font-size:12px;color:black;">Hi,<?php echo session('mName')?></span>
                  @else 
                  <span style="font-size:12px;color:red;">目前尚未登入</span>
                  @endif
                  
                  
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ...</button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <form method="get">
                        @if(session()->has('mName'))
                        <a class="dropdown-item" href="logout" name="logout">登出</a>
                          @else
                        <a class="dropdown-item" href="login" name="login">會員登入</a>
                        @endif
                        </form>
                        <form method="get" action="{{route('favorite')}}">
                        <a class="dropdown-item" href="favorite" name="select">最愛清單</a>
                        </form>
                        <form method="get">
                        @if(session()->has('mName'))
                        <?php $SN = session('mName') ?>
                        <a class="dropdown-item" href="memberedit" name=$SN input=$SN>修改會員資料</a>
                          @else
                        <a class="dropdown-item" href="register" name="register">註冊會員</a>
                        @endif</form>
                        
                        @if(session('mType')==2)
                        <form method="get" action="{{route('restaurantS')}}">
                        <a class="dropdown-item" href="restaurantS">餐廳相關</a>
                        </form>
                        @elseif(session('mType')==1)
                        <form method="get" action="{{route('sudo')}}">
                        <a class="dropdown-item" href="sudo">超級使用者界面</a>
                        </form>
                        @else
                        <a class="dropdown-item" href="/">返回</a>
                        @endif


                        
                              </div>
             
                  
                  </div>
                </div>
             
@yield('content')
                   </div>

                          <div><p></p></div>
                          <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                        <div style="background-color:rgb(24, 22, 22);">
                        <div>　</div><!--空格-->
                          <div class="container">
                              <div class="row">
                                  <div class="col-left col-md-8">
                                      <ul class="nav justify-content-left">
                                        <ul class="nav">
                                          <li class="nav-item">
                                            <a class="nav-link" style="color:white;font-size:10px;" href="#">關於</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" style="color:white;font-size:10px;" href="#">人才</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" style="color:white;font-size:10px;" href="#">BLOG</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" style="color:white;font-size:10px;" href="#">服務條款</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" style="color:white;font-size:10px;" href="#">隱私權政策</a>
                                            </li>
                                          <li class="nav-item">
                                                <a class="nav-link" style="color:white;font-size:10px;" href="#">餐廳合作</a>
                                          </li>
                                        </ul>
                                      </ul>
                                  </div>
                                  <div class="col12 col-md-2"></div>
                                  <div class="col12 col-md-2">
                                      <div class="d-flex align-items-center">
                                          <div class="col-sm">
                                                <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          選擇語言
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        
                                                        <a class="dropdown-item" href="select?select=1" name="select">1</a>
                                                        <a class="dropdown-item" href="select?select=2" name="select">2</a>
                                                        <a class="dropdown-item" href="select?select=3" name="select">3</a>
                                                        
                                                        </div>
                                                      </div>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            
                          <div class="container">
                          <hr size="8px" width="100%" style="background:#FFFF;">

                              <div class="row">
                                        <div class="col">
                                        </div>
                                        <div class="col-center"style="color:rgb(221, 170, 75)";>
                                           <h6> 台北市信義區基隆路一段178號5樓</h6>
                                        </div>
                                        <div class="col">
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                          <div class="col">
                                          </div>
                                          <div class="col-center"style="color:rgb(221, 170, 75)";>
                                             <h6> taiwan@eztable.com</h6>
                                          </div>
                                          <div class="col">
                                          </div>
                                        </div>
                                </div>
                              
                              <div class="container">
                                  <div class="row">
                                      <div class="col">
                                      </div>
                                      <div class="col-center"style="color:rgb(221, 170, 75)";>
                                          <p class="h6">週一至週四 10:00 至 19:00，週五 10：00 至 18：00</p>
                                      </div>
                                      <div class="col">
                                      </div>
                                    </div>
                              </div> 
                              
                          </div>
                             
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>