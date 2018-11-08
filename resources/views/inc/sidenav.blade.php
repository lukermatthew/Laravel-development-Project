<ul id="slide-out" class="sidenav sidenav-fixed grey lighten-4">
    <li>
        <div class="user-view">
            <div class="background">
            </div>
            {{-- Get picture of authenicated user --}}
            <a href="{{route('auth.show')}}"><img class="circle" src="{{asset('storage/admins/'.Auth::user()->picture)}}"></a>
            {{-- Get first and last name of authenicated user --}}
            <a href="{{route('auth.show')}}"><span class="white-text name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></a>
            {{-- Get email of authenicated user --}}
            <a href="{{route('auth.show')}}"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>
    
    <li>
        <a class="waves-effect waves-grey" href="/dashboard"><i class="material-icons">dashboard</i>Dashboard</a>
    </li>
    

    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons pl-15">home</i><span class="pl-15">Branch/Store Management</span></a>
                <div class="collapsible-body">
                    <ul>

                        <li>
                            <a class="waves-effect waves-grey" href="/employees">
                            <i class="material-icons">supervisor_account</i>Branch Account</a>
                        </li>

                        <li>
                            <a class="waves-effect waves-grey" href="/employees">
                            <i class="material-icons">places</i>Branch Area</a>
                        </li>



                    </ul>
                </div>
            </li>
        </ul>
    </li>


    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons pl-15">settings</i><span class="pl-15">Employee Management</span></a>
                <div class="collapsible-body">
                    <ul>

                        <li>
                            <a class="waves-effect waves-grey" href="/employees">
                            <i class="material-icons">supervisor_account</i>Employees</a>
                        </li>



                        <li>
                            <a href="/departments" class="waves-effect waves-grey">
                                <i class="material-icons">business</i>
                                Department
                            </a>
                        </li>
                        <li>
                            <a href="/salaries" class="waves-effect waves-grey">
                                <i class="material-icons">attach_money</i>
                                Salary
                            </a>
                        </li>
                        <li>
                            <a href="/divisions" class="waves-effect waves-grey">
                            <i class="material-icons">business</i>
                                Division
                            </a>
                        </li>
                        <li>
                            <a href="/cities" class="waves-effect waves-grey">
                            <i class="material-icons">location_city</i>
                                City
                            </a>
                        </li>
                        <li>
                            <a href="/states" class="waves-effect waves-grey">
                            <i class="material-icons">grid_on</i>
                                State
                            </a>
                        </li>
                        <li>
                            <a href="/countries" class="waves-effect waves-grey">
                            <i class="material-icons">terrain</i>
                                Country
                            </a>
                        </li>
                        <li>
                            <a href="/reports" class="waves-effect waves-grey">
                                <i class="material-icons">insert_drive_file</i>
                                Report
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>




     <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons pl-15">account_box</i><span class="pl-15">Inventory Management</span></a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="/products" class="waves-effect waves-grey">
                                <i class="material-icons">shopping_cart</i>
                                
                                Product
                            </a>
                        </li>

                        <li>
                            <a href="/productcategories" class="waves-effect waves-grey">
                                <i class="material-icons">lightbulb_outline</i>
                                
                                Category
                            </a>
                        </li>

                         <li>
                            <a href="/productsuppliers" class="waves-effect waves-grey">
                                <i class="material-icons">lightbulb_outline</i>
                                
                                Supplier
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
        </ul>
    </li>



    <li>
        <a href="/admins" class="waves-effect waves-grey"><i class="material-icons">account_circle</i>Admin Management</a>
    </li>
</ul>






