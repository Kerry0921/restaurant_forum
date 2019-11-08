<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
        
                <div class="d-flex align-items-center">
                  <div class="col-sm">
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  選擇分類
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  
                                <a class="dropdown-item" href="select?select=1" name="select">1</a>
                                <a class="dropdown-item" href="select?select=2" name="select">2</a>
                                <a class="dropdown-item" href="select?select=2" name="select">3</a>
                                                        
                                </div>
                              </div>
                  </div>
                  <div class="col-sm" style="text-align: center;">
                                <a href="/"><img src="https://d1gpbxqmt7wq2i.cloudfront.net/asset/mobile/images/logo/logo_moments_zh.png"width="200"></a>
                  </div>
                  <div class="col-sm" style="text-align: right;">
                    <a href="favorite"><button type="button" class="btn btn-secondary btn-lg";>最愛清單</button></a>
                  </div>
                </div>
             

                    <div style="background-color: yellow;height:352px;width: 100%;position: relative;">
                      <div style="position: absolute;bottom:0;left:25%">
                        <div class="container" style="width: 800px;">
                          <div class="row">
                            <div class="col-sm">
                              
                            </div>
                            <div class="col-sm"><form method="get" action="{{route('search')}}">
                              <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                輸入查詢</span>
                                </div>
                                
                                <input type="text" name="search" class="form-control" aria-label="請輸入" aria-describedby="inputGroup-sizing-sm" >
                                
                              </div>
                            </div>
                            <div class="col-sm">
                              <button type="submit"  style="color:black;background-color:red ;">找餐廳</button></form>
                            </div>
                          </div>
                        </div>
                      </div>                    
                    </div>

                    </div> 

                    <div class="container">
                            <div class="row">
                              <div class="col">
                                    <h1 class="display-4"> Kaohsiung City美食</h1>
                              </div>
                            </div>
                            <div class="row">
                            @foreach($restaurant as $select)
                              <div class="col" style="padding:20px;">
                                <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" src="https://images.unsplash.com/photo-1481070414801-51fd732d7184?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
                                  <div class="card-body">
                                  
                                    <h3 class="card-title">{{$select->rName}}</h3>
                                    <p class="card-text">{{$select->rType}}</p>
                                  
                                    <a href="restaurant" class="btn btn-primary">Go somewhere</a>
                                    <a href="/" class="btn btn-primary">追蹤</a>
                                </div>
                                </div>
                              </div>
                            @endforeach</div>
                          </div>
                          <div><p></p></div>
                          <!-- Stack the columns on mobile by making one full-width and the other half-width -->
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
                                  <div class="col12 col-md-2"></div>
                                  <div class="col12 col-md-2">
                                      <div class="d-flex align-items-center">
                                          <div class="col-sm">
                                                <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          選擇分類
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        
                                                        <a class="dropdown-item" href="select?select=1" name="select">1</a>
                                                        <a class="dropdown-item" href="select?select=2" name="select">2</a>
                                                        <a class="dropdown-item" href="select?select=2" name="select">3</a>
                                                        
                                                        </div>
                                                      </div>
                                      </div>
                                  </div>
                                </div>
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