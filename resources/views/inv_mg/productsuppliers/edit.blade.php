@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Update Product</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('productsuppliers.update',$productsupplier->id)}}" method="POST">

           


                            <div class="input-field no-margin">
                                <i class="material-icons prefix">account_balance</i>
                                <input type="text" name="supplier_name" id="supplier_name" value="{{Request::old('supplier_name') ? : $productsupplier->supplier_name}}">
                                <label for="supplier_name">Supplier Name</label>
                                <span class="{{$errors->has('supplier_name') ? 'helper-text red-text' : '' }}">{{$errors->first('supplier_name')}}</span>
                            </div>
                            <br>


                            <div class="input-field no-margin">
                                <i class="material-icons prefix">info_outline</i>
                                <input type="text" name="supplier_details" id="supplier_details" value="{{Request::old('supplier_details') ? : $productsupplier->supplier_details}}">
                                <label for="supplier_details">Supplier Details</label>
                                <span class="{{$errors->has('supplier_details') ? 'helper-text red-text' : '' }}">{{$errors->first('supplier_details')}}</span>
                            </div>
                            <br>



                            <div class="input-field no-margin">
                                <i class="material-icons prefix">add_location</i>
                                <input type="text" name="supplier_address" id="supplier_address" value="{{Request::old('supplier_address') ? : $productsupplier->supplier_address}}">
                                <label for="supplier_address">Address</label>
                                <span class="{{$errors->has('supplier_address') ? 'helper-text red-text' : '' }}">{{$errors->first('supplier_address')}}</span>
                            </div>
                            <br>



                            <div class="input-field no-margin">
                                <i class="material-icons prefix">contact_phone</i>
                                <input type="text" name="phone" id="phone" value="{{Request::old('phone') ? : $productsupplier->phone}}">
                                <label for="phone">Phone</label>
                                <span class="{{$errors->has('phone') ? 'helper-text red-text' : '' }}">{{$errors->first('phone')}}</span>
                            </div>
                            <br>





                      
                            
                            @method('PUT')
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Update</button>
                        </form>
                    </div>
                    <div class="card-action">
                        <a href="/productsuppliers">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection