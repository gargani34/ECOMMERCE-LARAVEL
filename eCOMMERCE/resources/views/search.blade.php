@extends('master')
@section('content')
    <div class=" custom-product">
          <div class="col-sm-3">
              <a href="#">Filter</a>
          </div>
          <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Result</h3>
                @foreach ($products as $item)
                <div class="search-item">
                  <a href="detail/{{$item['id']}}">
                  <img class="trending-image" src="{{$item['gallery']}}">
                  <div class="">
                    <h4>{{$item['name']}}</h4>
                    <h4>{{$item['desc']}}</h4>
                  </div>
                  </a>
                </div>
                @endforeach
                </div>
              </div>
          </div>
    </div>
@endsection
