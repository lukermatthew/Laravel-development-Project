@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-panel grey-text text-darken-2 mt-20">
            <h4 class="grey-text text-darken-1 center">Product Details</h4>
            <div class="row">
                <div class="row collection mt-20">
                    <!-- Show this image on small devices -->
                    <div class="col m8 l8 xl8">
                    <div class="row mb-0">

                                                <div class="col" style="float:right">
                                                    <form onsubmit="return confirm('Do you really want to delete?');" action="{{route('products.destroy',$product->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="material-icons">delete</i></button>
                                                    </form>

                                                </div> 
                                                
                                              <div class="col" style="float:right">
                                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                    
                                                </div>


                        <h5 class="pl-15 mt-20"><i class="material-icons left">shopping_cart</i>{{$product->Product_Name}}</h5>
                        <h6 class="pl-15 mt-20"><i class="material-icons left">navigation</i>Category: {{$product->invProductcategory->category_details}}</h6>
                        <p class="pl-15 mt-20"><i class="material-icons left">language</i>Date Created:  {{$product->created_at}}</p>
                        <p class="pl-15 mt-20"><i class="material-icons left">description</i>Product Details: {{$product->Product_details}}</p>
                       
                      
                       
                                             
                    </div>
                  
                  
                </div>
               
            </div>
        </div>
    </div>
@endsection