@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">Suppliers</h4>




    <div class="row">
        <!-- Show All Cities List as a Card -->
        <div class="card ">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Suppliers List</h5>
                    <!-- Table that shows Cities List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID</th>
                                <th>Supplier name</th>
                                <th>Supplier description</th>
                                
                              
                              
                               
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="item-table">

                           <!-- Check if there are any cities to render in view -->
                           @if($productsuppliers->count())
                           @foreach($productsuppliers as $productsupplier)
                          
                                    <tr>
                                        <td>{{$productsupplier->id}}</td>
                                        <td>{{$productsupplier->supplier_name}}</td>
                                        <td>{{$productsupplier->supplier_details}}</td>
                                       
                                        
                                       
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                                    <a href="{{ route('productsuppliers.edit',$productsupplier->id) }}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form onsubmit="return confirm('Do you really want to delete?');" action="{{route('productsuppliers.destroy',$productsupplier->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="material-icons">delete</i></button>
                                                    </form>

                                                
                                        


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                <!-- if there are no cities then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Supplier  found!</h6></td>
                                </tr>
                            @endif
                            @if(isset($search))
                                <tr>
                                    <td colspan="4">
                                        <a href="/productsuppliers" class="right">Show All</a>
                                    </td>
                                </tr>

                               
                            @endif
                                
                        </tbody>
                        
                        </table>
                    <!-- Cities Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
             
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>


<!-- This is the button that is located at the right bottom, that navigates us to city.create view -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="{{ route('productsuppliers.create') }}">
        <i class="large material-icons">add</i>
    </a>
</div> 
@endsection