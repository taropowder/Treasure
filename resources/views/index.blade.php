@extends('layouts.layout')

@section('content')
    <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
            <ul>
                @foreach($home_pictures as $home_picture)
                    <li class="ps-banner" data-index="rs-{{$home_picture['id']}}" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="/storage/{{$home_picture['picture']}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                        @if($home_picture['car_id'])

                        <div class="tp-caption ps-banner__title" id="layer{{$home_picture['id']}}" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <p class="text-uppercase">{{$home_picture['car']['name']}}</p>
                        </div>
                        <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            {!! $home_picture['description'] !!}
                        </div>
                        <a class="tp-caption ps-btn" id="layer31" href="{{route('details',$home_picture['car']['id'])}}" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">购买
                            <i class="ps-icon-next"></i></a>
                            @endif
                    </li>
                    @endforeach

            </ul>
        </div>
    </div>
    <br/>
    <br/>
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
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
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


    <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href=""><img src="/images/banner/high.jpg" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href=""><img src="/images/banner/low.jpg" alt=""></a></div>
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