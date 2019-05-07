<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/css1/css/style1.css">
    <link rel="stylesheet" href="<?php echo asset('public/css1/css/style2.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('public/css1/bootstrap/css/bootstrap.min.css'); ?> ">
    <link href="<?php echo asset('public/css1/bootstrap/css/bootstrap.css'); ?> " rel="stylesheet" type="text/css"
        media="all" />
    <link rel="stylesheet" href="<?php echo asset('public/css1/css/styledn.css'); ?>">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Document</title>
    @include('js')
</head>

<body>

    <div class="wrapper1">
        <!--header-->
        @include('header')
        <!-- end header-->

        
        
       <div>
       @yield('content1')
       </div>

        <!--footer-->
        @include('footer')
        <!--footer-->

    </div>

</body>

</html>