<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Product Detail</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="/plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="/plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="/css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
<body class="ps-loading">
<div class="header--sidebar"></div>
<header class="header" style="background-color: #fff;">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>中国北京五道口帝国 大厦 302号 020021-1212121</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions"><a href="#">Login & Regiser</a>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Japanese</a></li>
                                <li><a href="#">Chinese</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo"><a class="ps-logo" href="/"><img src="/images/logo.png" alt=""></a></div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item menu-item-has-children dropdown"><a href="/">主页</a>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown"><a href="/gallery">展示</a>
                    </li>
                    @foreach(\App\Classification::all() as $classification)
                        <li class="menu-item menu-item-has-children dropdown"><a href="">{{ $classification['name'] }}</a>
                            <ul class="sub-menu">
                                @foreach($classification['cars'] as $c)
                                <li class="menu-item"><a href="{{route('details',$c['car']['id'])}}">{{$c['car']['name']}}</a></li>
                                @endforeach
{{--                                <li class="menu-item"><a href="#">Homepage #2</a></li>--}}
{{--                                <li class="menu-item"><a href="#">Homepage #3</a></li>--}}
                            </ul>
                        </li>
                        @endforeach
                    @foreach(\App\Page::where('display',true)->get() as $page)
                        <li class="menu-item menu-item-has-children dropdown"><a href="{{route('display_name',$page['id'])}}">{{$page['name']}}</a>
                        </li>

                    @endforeach
{{--                    <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li class="menu-item"><a href="#">Contact Us #1</a></li>--}}
{{--                            <li class="menu-item"><a href="#">Contact Us #2</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
{{--            <div class="navigation__column right">--}}
{{--                <form class="ps-search--header" action="do_action" method="post">--}}
{{--                    <input class="form-control" type="text" placeholder="Search Product…">--}}
{{--                    <button><i class="ps-icon-search"></i></button>--}}
{{--                </form>--}}
{{--                <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>--}}
{{--                    <div class="ps-cart__listing">--}}
{{--                        <div class="ps-cart__content">--}}
{{--                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>--}}
{{--                                <div class="ps-cart-item__thumbnail"><a href="/product-detail.html"></a><img src="/images/cart-preview/1.jpg" alt=""></div>--}}
{{--                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="/product-detail.html">Amazin’ Glazin’</a>--}}
{{--                                    <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>--}}
{{--                                <div class="ps-cart-item__thumbnail"><a href="/product-detail.html"></a><img src="/images/cart-preview/2.jpg" alt=""></div>--}}
{{--                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="/product-detail.html">The Crusty Croissant</a>--}}
{{--                                    <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>--}}
{{--                                <div class="ps-cart-item__thumbnail"><a href="/product-detail.html"></a><img src="/images/cart-preview/3.jpg" alt=""></div>--}}
{{--                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="/product-detail.html">The Rolling Pin</a>--}}
{{--                                    <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ps-cart__total">--}}
{{--                            <p>Number of items:<span>36</span></p>--}}
{{--                            <p>Item Total:<span>£528.00</span></p>--}}
{{--                        </div>--}}
{{--                        <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="menu-toggle"><span></span></div>--}}
{{--            </div>--}}
        </div>
    </nav>
</header>
<div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        @foreach(\App\Announcement::all() as $announcement)
            <p class="ps-service">{{$announcement['content']}}</p>
        @endforeach
    </div>
</div>
<main class="ps-main">

@yield('content')
<div class="ps-footer bg--cover">
    <div class="ps-footer__content">
        <div class="ps-container">
            <div class="row">
                <a class="ps-logo" href="/"><img src="/images/logo.png" alt="" align="left"></a>
{{--                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">--}}
{{--                    <aside class="ps-widget--footer ps-widget--info">--}}
{{--                        <header>--}}
{{--                            <h3 class="ps-widget__title">Address Office 1</h3>--}}
{{--                        </header>--}}
{{--                        <footer>--}}
{{--                            <p><strong>460 West 34th Street, 15th floor, New York</strong></p>--}}
{{--                            <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>--}}
{{--                            <p>Phone: +323 32434 5334</p>--}}
{{--                            <p>Fax: ++323 32434 5333</p>--}}
{{--                        </footer>--}}
{{--                    </aside>--}}
{{--                </div>--}}
                @foreach(\App\Footer::all() as $footer)
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                        <header>
                            <h3 class="ps-widget__title">{{$footer['title']}}</h3>
                        </header>
                        <footer>
                            {!! $footer['content'] !!}
                        </footer>
                    </aside>
                </div>
                    @endforeach

            </div>
        </div>
    </div>
    <div class="ps-footer__copyright">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p style="color: #fff">Copyright &copy; XEV</p>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script type="text/javascript" src="/plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="/plugins/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="/plugins/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="/plugins/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/plugins/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ditu.google.cn/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
<script type="text/javascript" src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<!-- Custom scripts-->
<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>