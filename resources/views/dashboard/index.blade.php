@extends('layouts.app')
@section('content')
    <br>
    <div>
    
    <h4 class="grey-text text-darken-2 center">DASHBOARD <i class="material-icons">dashboard</i> </h4><br>

        <div class="row white-text">
            <a href="/admins" class="white-text">
                <div class="mx-20 card-panel pink lighten-1 col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2 offset-xl1 ml-14">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">person</i>
                            <h6 class="no-padding txt-md">Admins</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">Total({{$t_admins}})</p>
                        </div>
                    </div>
                </div>
            </a>

              <a href="/employees" class="white-text">
              <div class="mx-20 card-panel teal lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                        <i class="material-icons medium white-text pt-5">person_outline</i>
                            <h6 class="no-padding txt-md">Employees</h6>
                        </div>
                        <div class="col s5 xl5">
                        <p class="no-padding center mt txt-sm">Total({{$t_employees}})</p>
                        </div>
                    </div>
                </div>
            </a>

             <a href="/products" class="white-text">
              <div class="mx-20 card-panel blue lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                        <i class="material-icons medium white-text pt-5">shopping_cart</i>
                            <h6 class="no-padding txt-md">Products</h6>
                        </div>
                        <div class="col s5 xl5">
                        <p class="no-padding center mt txt-sm">Total({{$t_products}})</p>
                        </div>
                    </div>
                </div>
            </a>

            
            <a href="/products" class="white-text">
              <div class="mx-20 card-panel light green lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                        <i class="material-icons medium white-text pt-5">shopping_cart</i>
                            <h6 class="no-padding txt-md">Store branch</h6>
                        </div>
                        <div class="col s5 xl5">
                        <p class="no-padding center mt txt-sm">Total({{$t_products}})</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>  
            <br>

<div class="container">
    <div class="container-fluid">
        <div class="card-panel">
            <canvas id="employee"></canvas>
        </div>
    </div>
    </div>
    <br>
    {{-- include the chart.js Library --}}
    <script src="{{asset('js/chart.js')}}"></script>
    
    {{-- Create the chart with javascript using canvas --}}

    <script>
        // Get Canvas element by its id
        employee_chart = document.getElementById('employee').getContext('2d');
        chart = new Chart(employee_chart,{
            type:'line',
            data:{
                labels:[
                    /*
                        this is blade templating.
                        we are getting the date by specifying the submonth
                     */
                    '{{Carbon\Carbon::now()->subMonths(4)->toFormattedDateString()}}',
                    '{{Carbon\Carbon::now()->subMonths(3)->toFormattedDateString()}}',
                    '{{Carbon\Carbon::now()->subMonths(2)->toFormattedDateString()}}',
                    '{{Carbon\Carbon::now()->subMonths(1)->toFormattedDateString()}}'
                    ],
                datasets:[{
                    label:'Employment Last Four Months',
                    data:[
                        '{{$emp_count_4}}',
                        '{{$emp_count_3}}',
                        '{{$emp_count_2}}',
                        '{{$emp_count_1}}'
                    ],
                    backgroundColor: [
                        'rgba(178,235,242 ,1)'
                    ],
                    borderColor: [
                        'rgba(0,150,136 ,1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>



    
@endsection