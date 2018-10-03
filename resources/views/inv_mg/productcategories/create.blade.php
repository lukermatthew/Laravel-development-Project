@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Add Product</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('productcategories.store')}}" method="POST">
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">shopping_cart</i>
                                <input type="text" name="category_name" id="category_name" class="validate" value="{{Request::old('category_name') ? : ''}}">
                                <label for="category_name">Product Category Name</label>
                                <span class="{{$errors->has('category_name') ? 'helper-text red-text' : '' }}">{{$errors->first('category_name')}}</span>
                            </div>
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">tag</i>
                                <input type="text" name="category_details" id="category_details" class="validate" value="{{Request::old('category_details') ? : ''}}">
                                <label for="category_details">Product Category Details</label>
                                <span class="{{$errors->has('category_details') ? 'helper-text red-text' : '' }}">{{$errors->first('category_details')}}</span>
                            </div>
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/productcategories">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection