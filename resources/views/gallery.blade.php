
@extends('layouts.layout')

@section('content')
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!-- Main -->
    <div id="main">
        <article class="thumb">
            <a href="/storage/images/922007_abd51dbb8cb640c19409f12209955e66_mv2_d_8000_6000_s_4_2 (1).jpg" class="image1">
                <img src="/storage/images/922007_abd51dbb8cb640c19409f12209955e66_mv2_d_8000_6000_s_4_2 (1).jpg" alt=""  style="display: block"/>
                {{--<img src="images/thumbs/02.jpg" alt="" />--}}
            </a>
            <h2>Magna feugiat lorem</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>
        <article class="thumb">
            <a href="images/fulls/02.jpg" class="image1"><img src="images/thumbs/02.jpg" alt="" /></a>
            <h2>Nisl adipiscing</h2>
            <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
        </article>

    </div>

    <!-- Footer -->


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
@endsection