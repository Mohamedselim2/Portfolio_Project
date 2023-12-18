@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!doctype html>
<html lang="en">
<title>@yield('title')</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A passionate and dedicated software engineer with a strong foundation. My journey in the world of programming has equipped me with a diverse skill set that spans core instructions, team leading, problem-solving, and back-end development.">
    <meta name="author" content="Devcrud">

    <title>Meem Studio</title>

    <link rel="stylesheet" href="{{ asset('import/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/johndoe.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{ asset('import/assets/css/tooplate-style.css') }}">
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('import/assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Steller main styles -->
    <link rel="stylesheet" href="{{ asset('import/assets/css/steller.css') }}">

    <link rel="stylesheet" href="{{ asset('import/assets/css/main.css') }}">

</head>
<style>
    a:hover,
    .text-danger {
        color: {{$user['color']}} !important;
    }
    .custom-btn:hover,
    .animated-item,
    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover,
    .dark-mode .navbar-light .navbar-nav .nav-link:hover,
    .owl-theme .owl-nav [class*=owl-]:hover,
    .social-links .uil:hover,
    a,
    a:hover{
        color: {{$user['color']}};
    }
    .custom-btn.custom-btn-bg:hover,
    .socials .social-item:hover,
    .contact-form .submit-btn,
    .dropdown-item.active, .dropdown-item:active,
    .progress-bar,
    .line,
    .portfolio .filters a.active{
        background: {{$user['color']}};
    }
    .socials .social-item {

        border: 2px solid {{$user['color']}};
        color: {{$user['color']}};

    }
    .contact-form .form-control:hover, .contact-form .form-control:focus {
        border-color: {{$user['color']}};
    }
</style>
<body >
    {{View::make('layouts/header')}}
    @yield('content')
    {{View::make('layouts/footer')}}
    <script src="{{ asset('import/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/Headroom.js') }}"></script>
    <script src="{{ asset('import/assets/js/jQuery.headroom.js') }}"></script>
    <script src="{{ asset('import/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('import/assets/js/custom.js') }}"></script>


    <script src="{{ asset('import/assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('import/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('import/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Isotope  -->
    <script src="{{ asset('import/assets/vendors/isotope/isotope.pkgd.js') }}"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{ asset('import/assets/js/johndoe.js') }}"></script>


    <!-- core  -->
    <script src="{{ asset('../public/import/assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('../public/import/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
    <!-- bootstrap 3 affix -->
    <script src="{{ asset('../public/import/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- steller js -->
    <script src="{{ asset('../public/import/assets/js/steller.js') }}"></script>
</body>
</html>
