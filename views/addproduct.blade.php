@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Laravel Shopping Site</h2></div>
                <a href="{{url('home')}}" class="btn btn-sm btn-success"> Back</a>
<br><br>

                <form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="product_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Title">
                        </div>
                        <div class="form-group">
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price">
                        </div>
                        <div class="form-group">
                            <input type="text" name="product_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Description">
                        </div>
                        <div class="form-group">
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Title">
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
