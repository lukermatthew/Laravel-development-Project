@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">Product Category</h4>




    <div class="row">
        <!-- Show All Cities List as a Card -->
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Product Category List</h5>
                    <!-- Table that shows Cities List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID</th>
                                <th>Category name</th>
                                <th>Category details</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="item-table">

                          <!-- Check if there are any cities to render in view -->
                         
                                @foreach($productcategories as $productcategory)
                                    <tr>
                                        <td>{{$productcategory->id}}</td>
                                        <td>{{$productcategory->category_name}}</td>
                                        <td>{{$productcategory->category_details}}</td>
                                        <td>{{$productcategory->created_at}}</td>
                                        <td>{{$productcategory->updated_at}}</td>   
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                                    <a href="{{ route('productcategories.edit',$productcategory->id) }}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form onsubmit="return confirm('Do you really want to delete?');" action="" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="material-icons">delete</i></button>
                                                    </form>

                                                
                                        


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                               
                          
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
    <a class="btn-floating btn-large waves=effect waves-light red" href="{{ route('productcategories.create') }}">
        <i class="large material-icons">add</i>
    </a>
</div> 
@endsection