@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Add Product</h4>
                <div class="card-content">
                    <div class="row">
                        
                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">shopping_cart</i>
                                <input type="text" name="Product_name" id="Product_name" class="validate" value="{{Request::old('Product_name') ? : ''}}">
                                <label for="Product_name">Product Name</label>
                                <span class="{{$errors->has('Product_name') ? 'helper-text red-text' : '' }}">{{$errors->first('Product_name')}}</span>
                            </div>

                            <div class="input-field no-margin">
                                <i class="material-icons prefix">tag</i>
                                <input type="text" name="Product_details" id="Product_details" class="validate" value="{{Request::old('Product_details') ? : ''}}">
                                <label for="Product_details">Product Details</label>
                                <span class="{{$errors->has('Product_details') ? 'helper-text red-text' : '' }}">{{$errors->first('Product_details')}}</span>
                            </div>

                            <br>
                             <div class="input-field no-margin">
                                <i class="material-icons prefix">business</i>
                                <select name="productcategory">
                                    <option value="" disabled {{ old('productcategory') ? '' : 'selected' }}>Choose a Category</option>
                                    @foreach($productcategories as $productcategory)
                                        <option value="{{$productcategory->id}}" {{ old('productcategory') ? 'selected' : '' }}>{{$productcategory->category_details}}</option>
                                    @endforeach
                                </select>
                                <label>Product Category</label>
                            </div>

                           


                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/cities">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection