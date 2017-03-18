<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YuBin Chung | Portfolio</title>
    <!-- CSRF Token -->
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Scripts -->
     <script src="/js/app.js"></script>




</head>
<body>

<div class="contents_wrap">
    <header>
        <h1 class="logo"><a href="/" title="YuBin Chung">YuBin Chung</a></h1>
        <p class="site-description">PORTFOLIO &amp; BLOG</p>
        <nav class="hamburger">
            <a href="javascript:void(0);">
                <span class="line1"></span>
                <span class="line2"></span>
            </a>
        </nav>
        <nav class="menu_main">
            <ul>
                @foreach($menus as $menu)
                <li><a href="{{ $menu -> slug }}" title="{{ $menu -> name }}">{{ $menu -> name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    <div id="content">

        <div class="container">
            @yield('contents')

        </div>
        <div class="container intro">
            @include('layouts.intro')
        </div>


        <div class="popup itemdetail">

            <div class="pop_inner">
                <a href="javascript:void(0);" class="btn_close">
                    <span class="line1"></span>
                    <span class="line2"></span>
                </a>
                <div>
                    @yield('itemDetail')
                </div>

            </div>
        </div>


    </div>
    <footer>
        <div class="site-info">
            <h6>© 2017 YuBin Chung. All Rights Reserved.</h6>
        </div>
    </footer>
</div>
</body>
</html>
