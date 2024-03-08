<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    <script src="{{asset('/js/jquery-3.6.0.min.js')}}"></script>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('New-folder/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('New-folder/css/modern-business.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/New-folder/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   
  <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- <link rel="stylesheet" href="{{asset('/profile/css/bootstrap-rtl.css')}}">
	<link rel="stylesheet" href="{{asset('/profile/css/font-awesome.min.css')}}"> -->
</head>
<style>
@font-face {
    font-family: 'yekan';
    src: url('/fonts/yekan.ttf') format('truetype'),
        url('/fonts/yekan.eot?#iefix') format('embedded-opentype');
}

div,
ul,
li {
    list-style:none;
}

body {
    font-family: yekan;
}
</style>

<body>
    <!-- Navigation -->
    @include('new-front.nav')

    <!-- Header Carousel -->
    @if(isset($index))
    @include('new-front.header')
    @endif
    <!-- Page Content -->
    <div class="container" style="">

        <!-- Marketing Icons Section -->
        @yield('content')

        <!-- Footer -->
        @include('new-front.footer')

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('New-folder/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('New-folder/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/profile/js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('/profile/js/bootstrap.min.js')}}"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!--    templatewebsite.ir-->

    <!--    templatewebsite.ir-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</body>

</html>