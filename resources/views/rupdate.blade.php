<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>餐廳修改</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
              <div class="d-flex align-items-center">
                  <div class="col-sm">
                        <div class="dropdown">
                                <a href="/"><button class="btn btn-secondary " type="button" id=""  aria-haspopup="true" aria-expanded="false">
                                  返回首頁
                                </button></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                
                                 
                                </div>
                              </div>
                  </div>
                  
                  <div class="col-sm" style="text-align: center;">
                  <a href ="/"><img src="https://d1gpbxqmt7wq2i.cloudfront.net/asset/mobile/images/logo/logo_moments_zh.png"width="200"></a>                  </div>
                  <div class="col-sm"  class="dropdown" style="text-align: right;">
                  
                  
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ...</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <form method="get" action="{{route('logout')}}">
                        <a class="dropdown-item" href="logout" name="logout">登出</a>
                        </form>
                        <form method="get" action="{{route('favorite')}}">
                        <a class="dropdown-item" href="favorite" name="select">最愛清單</a>
                        </form>
                        <a class="dropdown-item" href="/">返回</a>                              </div>

                              
                            </div>
                          </div>

                <div style="background-color: yellow;height:352px;width: 100%;position: relative;">
                      <div style="position: absolute;bottom:0;left:25%">
                        <div class="container" style="width: 800px;">
                          <div class="row">
                            <div class="col-sm"></div></div></div></div></div></div> 
                            <div>　　　　　　　　　　　　　　　　</div>
                            

            <div class=out1 style='text-align:center'>
              <form action="rupdate" method="post">
              @foreach($restaurant as $data)
                <h1>餐廳資料修改</h1>
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
                <div></div>

                        
                          <div style="background-color:rgb(24, 22, 22);">
                          <div class="container">
                              <div class="row">
                                  <div class="col-12 col-md-8">
                                      <ul class="nav justify-content-left">
                                        <ul class="nav">
                                          <li class="nav-item">
                                            <a class="nav-link " href="#">關於</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">人才</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">BLOG</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">服務條款</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">隱私權政策</a>
                                            </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#">餐廳合作</a>
                                          </li>
                                        </ul>
                                      </ul>
                                  </div>
                                 
                            
                          <div class="container">
                              <div class="row">
                                        <div class="col">
                                        </div>
                                        <div class="col"style="color:rgb(221, 170, 75)";>
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
                                          <div class="col-12 col-md-3"style="color:rgb(221, 170, 75)";>
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
                                      <div class="col-5"style="color:rgb(221, 170, 75)";>
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