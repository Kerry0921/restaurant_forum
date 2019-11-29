@extends('layouts.master')
@section('title','搜尋結果')
<!--內容-->
@section('content')
                  <div style="background-color: yellow;height:352px;width: 100%;position: relative;">
                      <div style="position: absolute;bottom:0;left:25%">
                        <div class="container" style="width: 800px;">
                          <div class="row">
                          
                            <div class="col-left">
                            <div class="col-sm"><form method="get" action="{{route('search')}}">
                              <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                輸入查詢
                                </div>
                                
                                <input type="text" name="search" class="form-control" aria-label="請輸入" aria-describedby="inputGroup-sizing-sm" >
                                
                              </div>
                            </div>
                            <div class="col-sm">
                              <button type="submit"  style="color:white;background-color:gray ;">找餐廳</button></form>
                            </div></span></div>

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
                            @foreach($restaurant as $searchback)
                              <div class="col" style="padding:20px;">
                                <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" src="https://images.unsplash.com/photo-1481070414801-51fd732d7184?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
                                  <div class="card-body">
                                  
                                  <a href="detail?detail={{$searchback->rName}}" style="color:black;" name="detail" value="{{$searchback->rName}}"><h3 class="card-title">{{$searchback->rName}}</h3></a>
                                    <p class="card-text">類別：{{$searchback->rType}}</p>
                                  
                                    <a href="detail?detail={{$searchback->rName}}" class="btn btn-primary">餐廳資訊</a>
                                   
                                </div>
                                </div>
                              </div>
                            @endforeach</div>
                          </div>
                          <div><p></p></div>
@endsection