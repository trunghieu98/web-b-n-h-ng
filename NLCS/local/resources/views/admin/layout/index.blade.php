<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/css1/css/admin.css')}}">

    <link rel="stylesheet" href="<?php echo asset('public/css1/bootstrap/css/bootstrap.min.css'); ?> ">
    <link href="<?php echo asset('public/css1/bootstrap/css/bootstrap.css'); ?> " rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->

        <div class="container-fluid">
            <!-- 
                header
             -->
            @include('admin.layout.header')
            <div class="row">

                <!-- menuleft -->
                @include('admin.layout.menuleft')
                <!-- //menuleft -->

                <!-- menuright -->
                @yield('content2')
                <!-- menuright -->
            </div>
        </div>

    </div>
</body>

</html>