<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">

    <div class="wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')

        @yield('content')

        @include('layouts.footer')

    </div>

    @include('layouts.script')
    
</body>
</html>