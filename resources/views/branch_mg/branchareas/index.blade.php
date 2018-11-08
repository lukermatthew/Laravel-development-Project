@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">Branch Areas</h4>




    <div class="row">
        <!-- Show All Cities List as a Card -->
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Branch Areas List</h5>
                    <!-- Table that shows Cities List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="item-table">

                         
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