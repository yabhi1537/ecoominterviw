
<?php
use App\Http\Controllers\AddproductController;
$total = AddproductController::carttotal();

?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Laravel Shopping Site</h2></div>
                <a href="{{url('productlist')}}" class="btn btn-sm btn-danger"> Add Product</a>

                <a href="{{url('cardlisting')}}" class="btn btn-sm btn-info"> Cart Add Product( {{$total}})</a>

<br><br><br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       @foreach($data as $product)
                    <div class="card">
                    <div class="col-md-8">
                        <a href="{{url('detaills')}}/{{$product->id}}">
                        <img src="assets\images\blog\{{$product->product_image}}" height="300px" width="300px" alt="Denim Jeans" >
                          </a>
                        <h1>{{$product->product_name}}</h1>
                        <p class="price">$ {{$product->product_price}}</p>
                        <p>{{$product->product_description}}</p>
                        <a href="{{url('detaills')}}/{{$product->id}}" class="btn btn-sm btn-primary">Show more Dettail</a>
                        </div> 
                        </div> 
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
