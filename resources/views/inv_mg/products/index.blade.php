@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">Product Management</h4>


{{-- Include the searh component with with title and route --}}
    @component('inv_mg.inc.search',['title' => 'Product' , 'route' => 'products.search'])
    @endcomponent
   

    <div class="row">
        <!-- Show All Cities List as a Card -->
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Product List</h5>
                    <p class="pl-15 grey-text text-darken-2">Latest Product</p>
                    <!-- Table that shows Cities List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID#</th>
                                <th>Product name</th>
                                <th>Product details</th>
                                <th>Category</th>
                                <th>Created at</th>
                               
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="item-table">
                             <!-- Check if there are any cities to render in view -->
                             @if($products->count())
                                @foreach($products as $product)
                                    <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$product->Product_Name}}</td>
                                        <td>{{$product->Product_details}}</td>
                                        <td>{{$product->invProductcategory->category_details}}</td>
                                        <td>{{$product->created_at}}</td>
                                        
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                              <a href="{{route('products.show',$product->id)}}" class="btn btn-small btn-floating waves=effect waves-light teal lighten-2"><i class="material-icons">list</i></a>
                                                    
                                                </div>

                                                
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                @else
                                <!-- if there are no cities then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Products  found!</h6></td>
                                </tr>
                            @endif
                            @if(isset($search))
                                <tr>
                                    <td colspan="4">
                                        <a href="/products" class="right">Show All</a>
                                    </td>
                                </tr>

                               
                            @endif
                           
                        </tbody>
                        
                    </table>
                   
    
   
   
                   
                    <!-- Cities Table END -->
                </div>
                <!-- Show Pagination Links --> {{ $products->links() }} 
                <div class="center">
             
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>


<!-- This is the button that is located at the right bottom, that navigates us to city.create view -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="{{route('products.create')}}">
        <i class="large material-icons">add</i>
    </a>
</div> 
@endsection