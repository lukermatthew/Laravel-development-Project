@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Update Product</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('products.update',$product->id)}}" method="POST">

                        <div class="input-field">
                                <i class="material-icons prefix">shopping_cart</i>    
                                <input type="text" name="Product_name" id="Product_name" value="{{Request::old('Product_name') ? : $product->Product_name}}">
                                <label for="Product_name">Product Name</label>
                                <span class="{{$errors->has('Product_name') ? 'helper-text red-text' : ''}}">{{$errors->first('Product_name')}}</span>
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">tag</i>    
                                <input type="text" name="Product_details" id="Product_details" value="{{Request::old('Product_details') ? : $product->Product_details}}">
                                <label for="Product_details">Product Details</label>
                                <span class="{{$errors->has('Product_details') ? 'helper-text red-text' : ''}}">{{$errors->first('Product_details')}}</span>
                            </div>


                      
                            
                            @method('PUT')
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Update</button>
                        </form>
                    </div>
                    <div class="card-action">
                        <a href="/products">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection