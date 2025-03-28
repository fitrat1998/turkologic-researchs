<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.png') }}">
    <title> @yield('title') </title>
    <meta name="author" content="InsonCJ">
    <meta name="description" content="@yield('description')" />
    <meta property="og:image" content="@yield('og_image')">
    <meta name="keywords" content="Jurnal, inson, kapitali, inson kapitali, ilmiy jurnal, iqtisodiy jurnal, ijtimoiy rivojlanish, ilmiy maqola, maqola, maqola yuborish, @yield('keywords')" />
    <!-- Bootstrap CSS -->
    <!-- Jquery Js -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/itc-slider.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- slick Slider -->
    <link href="{{ asset('assets/vendor/slick/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/slick/slick/slick-theme.css') }}" rel="stylesheet">
     <link href="https://itchief.ru/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet">
  <script src="https://itchief.ru/examples/libs/ui-components/itc-slider/itc-slider.js" defer></script>
    <!-- Icofont -->
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adassets/plugins/toastr/toastr.min.css') }}">
    <script src="{{ asset('adassets/plugins/toastr/toastr.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/itc-slider.js') }}"></script> -->

    <style type="text/css">
      .icon-1{
        font-size: 130px;
        text-align: center;
        color:#198935 !important;
      }

      .my-row .col{
        -webkit-box-shadow: 13px 12px 8px 0px rgba(34, 60, 80, 0.2);
        -moz-box-shadow: 13px 12px 8px 0px rgba(34, 60, 80, 0.2);
        box-shadow: 13px 12px 8px 0px rgba(34, 60, 80, 0.2);
      }


        .swiper {
            width: 100%;
            padding: 20px 0;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .swiper-slide img {
            max-width: 150px;
            max-height: 80px;
            object-fit: contain;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
        }

        .swiper-pagination-bullet-active {

    </style>


    @stack('page_css')

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
            @endforeach
        </script>
    @endif


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="bg-light">
<!-- navbar -->

@include('web.web_header')


@yield('body')

<!-- Footer -->
@include('web.web_footer')

</body>

<!-- Bootstrap Bundle Js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Slick Js -->
<script src="{{ asset('assets/vendor/slick/slick/slick.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/custom.js')}}"></script>
@if(Session::has('success_msg'))
    <script>toastr.success("{{session('success_msg')}}")</script>
@endif
@if(Session::has('error_msg'))
    <script>toastr.error("{{session('error_msg')}}")</script>
@endif

<script>
window.replainSettings = { id: 'c6ea4972-ae63-4ce9-b351-75c7e69412ce' };
(function(u){var s=document.createElement('script');s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>

@stack('page_js')

</html>
