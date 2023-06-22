@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Laravel Shopping Site</h2></div>
               

<br>
<div class="container">
<a href="{{url('home')}}" class="btn btn-sm btn-success"> Back</a>
        <br><br>
        <br><br>
    
        	<div class="row">
                
               <div class="col-xs-4 item-photo">
               <img src="assets\images\blog\{{$product->product_image}}" width="300px" height="500px">                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$product->product_name}}</h3>    
                    <h5 style="color:#337ab7"><a href="#">{{$product->product_title}}</a> · <small style="color:#337ab7">(5054 ventas)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>PRECIO OFERTA</small></h6>
                    <h3 style="margin-top:0px;">$ {{$product->product_price}}</h3>
        
                    <!-- Detalles especificos del producto -->
              
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>CAPACIDAD</small></h6>                    
                        <div>
                            <div class="attr2">16 GB</div>
                            <div class="attr2">32 GB</div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                    <form action="{{route('addtocart')}}" method="POST">
                        @csrf
                         <input type="text" name="product_id" value="{{$product->id}}" >
                        <input type="hidden" name="user_id" value="{{$userid[0]['id']}}" >
                        <button type="submit" value="submit" class="btn btn-success" ><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Add to Cart</button>
                       </form>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                    </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                        {{$product->product_description}}
                        </p>
           
                    </div>
                </div>		
            </div>
        </div>        
            </div>
        </div>
    </div>
</div>
@endsection
