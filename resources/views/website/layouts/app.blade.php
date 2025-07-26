<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aivri</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

</head>

<body>

    <!-- loader -->
    <!-- <div class="loader">
      <div class="loader-content">
          <img src="assets/img/binasheergif.gif" alt="Loader" class="loader-icon">
      </div>
    </div> -->
    <!-- loader -->


    @include('website.layouts.header')

    @yield('content')

    @include('website.layouts.footer')

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/font-awsome.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/lenis.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <!-- <script src="assets/js/popper.min.js"></script> -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script>
        var isLoggedIn = @json(auth()->check());
    </script>
    @yield('scripts')

    <script>
        AOS.init();
    </script>
</body>

</html>
