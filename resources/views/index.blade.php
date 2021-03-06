@extends('layouts.layout')
@section('content')
    <div class="ps-banner video-container">

                <video class="select" style="object-fit:fill;width:100%;height:500px;"  frameborder="0"   preload="auto" src="/video/introduce.mp4" poster="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" autoplay="" playsinline="" muted="" loop="" webkit-playsinline="true" x-webkit-airplay="true"></video>
    </div>
    @include('admin.index')
    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <h3 class="ps-section__title" data-mask="HOT SALE">- 热卖车型</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach(\App\Car::all() as $car)
                        <div class="ps-shoes--carousel">
                            <div class="ps-shoe">
                                <div class="ps-shoe__thumbnail">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                    <img src="/storage/{{$car['images'][0]['picture']}}" alt="">
                                    <a class="ps-shoe__overlay" href="{{route('details',$car['id'])}}"></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__variants">
                                        <p>{{ $car['description'] }}</p>
                                    </div>
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="{{route('details',$car['id'])}}">{{$car['name']}}</a>
                                        {{--                                    <p class="ps-shoe__categories">--}}
                                        {{--                                       这里是介绍</p>--}}
                                        <span class="ps-shoe__price"> ¥ {{$car['money']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
        </div>
    </div>














{{--    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">--}}
{{--        <div class="ps-container">--}}
{{--            <div class="ps-section__header mb-50">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">--}}
{{--                        <h3 class="ps-section__title" data-mask="BEST SALE">- 新车上市</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">--}}
{{--                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="ps-section__content">--}}
{{--                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">--}}
{{--                    <div class="ps-shoes--carousel">--}}
{{--                        <div class="ps-shoe">--}}
{{--                            <div class="ps-shoe__thumbnail">--}}
{{--                                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/1.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>--}}
{{--                            </div>--}}
{{--                            <div class="ps-shoe__content">--}}
{{--                                <div class="ps-shoe__variants">--}}
{{--                                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>--}}
{{--                                    <select class="ps-rating ps-shoe__rating">--}}
{{--                                        <option value="1">1</option>--}}
{{--                                        <option value="1">2</option>--}}
{{--                                        <option value="1">3</option>--}}
{{--                                        <option value="1">4</option>--}}
{{--                                        <option value="2">5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>--}}
{{--                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="ps-shoes--carousel">--}}
{{--                        <div class="ps-shoe">--}}
{{--                            <div class="ps-shoe__thumbnail">--}}
{{--                                <div class="ps-badge"><span>New</span></div>--}}
{{--                                <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/2.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>--}}
{{--                            </div>--}}
{{--                            <div class="ps-shoe__content">--}}
{{--                                <div class="ps-shoe__variants">--}}
{{--                                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>--}}
{{--                                    <select class="ps-rating ps-shoe__rating">--}}
{{--                                        <option value="1">1</option>--}}
{{--                                        <option value="1">2</option>--}}
{{--                                        <option value="1">3</option>--}}
{{--                                        <option value="1">4</option>--}}
{{--                                        <option value="2">5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>--}}
{{--                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">--}}
{{--					<del>£220</del> £ 120</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<!-- JS Library-->
@endsection