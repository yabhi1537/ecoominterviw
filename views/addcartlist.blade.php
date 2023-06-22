@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Laravel Shopping List</h2></div>


<br><br><br>
                <div class="card-body">
                       @foreach($cartdata as $product)
                    <div class="card">
                    <div class="col-md-8">
                        <a href="{{url('detaills')}}/{{$product->id}}">
                        <img src="assets\images\blog\{{$product->product_image}}" height="300px" width="300px" alt="Denim Jeans" >
                          </a>
                        <h1>{{$product->product_name}}</h1>
                        <p class="price">$ {{$product->product_price}}</p>
                        <p>{{$product->product_description}}</p>
                        <a href="{{url('removeitem')}}/{{$product->id}}" class="btn btn-sm btn-danger">Remove From Cart</a>
                   </div> 
                 </div> 
                 
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
