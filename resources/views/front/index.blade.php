<!DOCTYPE html>
<html lang="en">

@include('front.head')

<body>
@include('front.header')
  <main id="main">
@yield('content')
  </main><!-- End #main -->
@include('front.footer')
  <!-- ======= Footer ======= -->
 
</body>

</html>