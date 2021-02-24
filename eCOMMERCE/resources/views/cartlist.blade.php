@extends('master')
@section('content')
    <div class=" custom-product">
         
          <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Cart List</h2>
                @foreach ($products as $item)
                <div class="row search-item cart-list-devider">
                  <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                       
                        </a>
                  </div>
                  <div class="col-sm-3">
                   
                        <div class="">
                          <h4>{{$item->name}}</h4>
                          <h4>{{$item->desc}}</h4>
                        </div>
                        
                  </div>
                  <div class="col-sm-3">
                   
                          <button class="btn btn-warning">Remove From Cart</button>
                  </div>
                </div>
                @endforeach
                </div>
              </div>
          </div>
    </div>
@endsection
