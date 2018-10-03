<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Laravel Project</title>
</head>
<body>
    <main class="pl-0 main-login">
        @yield('content')
        
    </main>
        
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Include the Script after materialize.js is loaded -->
    @include('inc.message')
</body>
</html>