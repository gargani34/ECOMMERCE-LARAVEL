@extends('master')
@section('content')
    <div class=" container">
        <div class="row">
            <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="">
        </div>
        
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h3>{{$product['name']}}</h3>
            <h3>{{$product['price']}}</h3>
            <h3>{{$product['desc']}}</h3>
            <h3>{{$product['category']}}</h3>
            <br><br>
            <button class="btn btn-primary">Add to Cart</button>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
    </div>
</div>
@endsection
