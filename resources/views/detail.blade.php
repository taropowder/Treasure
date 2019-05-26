@extends('layouts.layout')

@section('content')
    <div class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product--detail pt-60">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-lg-offset-1">
                    <div class="ps-product__thumbnail">
                        <div class="ps-product__preview">
                            <div class="ps-product__variants">
                                @foreach($car['images'] as $image)
                                    <div class="item"><img src="/storage/{{ $image['picture'] }}" alt=""></div>
                                @endforeach
                            </div><a class="popup-youtube ps-product__video" href=""><img src="/storage/{{ $car['images'][0]['picture'] }}" alt=""><i class="fa fa-play"></i></a>
                        </div>
                        <div class="ps-product__image">
                            @foreach($car['images'] as $image)
                                <div class="item"><img class="zoom" src="/storage/{{ $image['picture'] }}" alt="" data-zoom-image="/storage/{{ $image['picture'] }}"></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="ps-product__thumbnail--mobile">
                        <div class="ps-product__main-img"><img src="/storage/{{ $car['images'][0]['picture'] }}" alt=""></div>
                        <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
                            @foreach($car['images'] as $image)
                                <img src="/storage/{{ $image['picture'] }}" alt="">
                            @endforeach
                        </div>
                    </div>
                    <div class="ps-product__info">
                        <h1>{{ $car['name'] }}</h1>
                        <h3 class="ps-product__price">¥ {{ $car['money'] }}</h3>
                        <div class="ps-product__block ps-product__quickview">
                            <p>{{ $car['description'] }}</p>
                        </div>
                        {{--                        <div class="ps-product__block ps-product__style">--}}
                        {{--                            <h4>选择样式</h4>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="/product-detail.html"><img src="/images/shoe/sidebar/1.jpg" alt=""></a></li>--}}
                        {{--                                <li><a href="/product-detail.html"><img src="/images/shoe/sidebar/2.jpg" alt=""></a></li>--}}
                        {{--                                <li><a href="/product-detail.html"><img src="/images/shoe/sidebar/3.jpg" alt=""></a></li>--}}
                        {{--                                <li><a href="/product-detail.html"><img src="/images/shoe/sidebar/2.jpg" alt=""></a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        <div class="ps-product__block ps-product__style">
                            <h4>选择配件</h4>
                            <ul>
                                @foreach($car['accessories'] as $accessories)
                                    <li><a href="#"><img width="50px" height="50px" src="/storage/{{ $accessories['picture'] }}" alt="{{ $accessories['name'] }}" title="{{ $accessories['name'] }}"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="ps-product__shopping"><a class="ps-btn mb-10" href="cart.html">加入购物车<i class="ps-icon-next"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="ps-product__content mt-50">
                        <ul class="tab-list" role="tablist">
                            <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">介绍</a></li>
                            <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">效果图</a></li>
                        </ul>
                    </div>
                    <div class="tab-content mb-60">
                        <div class="tab-pane active" role="tabpanel" id="tab_01" align="center">
                            {{--                        {!! $car['particulars'] !!}--}}
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_02">
                            <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
                            <div class="ps-review">
                                <div class="ps-review__thumbnail"><img src="/images/user/1.jpg" alt=""></div>
                                <div class="ps-review__content">
                                    <header>
                                        <select class="ps-rating">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                                    </header>
                                    <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--    <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
                <div class="ps-container">--}}
        <div class="ps-section ps-section--top-sales ps-owl-root pb-80" style="padding-top: 0">

            <div class="ps-container">


                <div style="display: flex;justify-content: center;align-items: center;padding: 2rem;padding-top: 0;padding-bottom: 5rem">
                    <div class="ps-column" style="margin-right: 2rem"><img  src="/images/index/009.png" alt="">
                    </div>
                    <div class="ps-column">
                        <h1>&nbsp;WELCOME TO NEV</h1>
                        <p>XEV has developed industrial 3D printing technologies and processes for automotive mass production.
                            We use 3D printing to give our customers an ultimate user experience through fast product development,
                            customization and flexibility of design.
                        </p>
                    </div>
                </div>
            </div>


            <div class="ps-container">

                <div class="ps-section--offer">
                    <div class="ps-column" style="padding: 2rem;padding-bottom:0"><a  href=""><img width="100%" height="60%" src="/images/index/001.jpg" alt=""></a>
                        <p>XEV is an innovative startup that combines additive manufacturing and smart urban mobility.
                            Our mission is to reduce waste of materials, time and money created by traditional manufacturing.</p>
                    </div>
                    <div class="ps-column" style="padding: 2rem;padding-bottom: 0"><a  href=""><img width="100%" height="60%"  src="/images/index/002.jpg" alt=""></a>
                        <p>XEV has developed industrial 3D printing technologies and processes for automotive mass production.
                            We use 3D printing to give our customers an ultimate user experience through fast product development,
                            customization and flexibility of design.
                        </p></div>


                    <div class="ps-column" style="padding: 2rem;padding-bottom: 0;margin-top: -5rem;margin-bottom: -6.5rem"><a  href=""><img width="100%" height="60%"  src="/images/index/003.jpg" alt=""></a>
                        <p>XEV urban electric vehicles combine a flexible modular chassis,
                            beautifully designed 3D printed interior and exterior panels together with a comfortable,
                            easy to use driving experience. The style of the vehicle can be updated and changed easily for a
                            cost of an iPhone upgrade.
                        </p>
                    </div>
                    <div class="ps-column" style="padding: 2rem;padding-bottom: 0;margin-top: -5rem;margin-bottom: -6.5rem"><a  href=""><img width="100%" height="60%"  src="/images/index/004.jpg" alt=""></a>
                        <p>The goal of XEV is to capitalize on the benefits of Industry 4.0 in order to reach Zero manufacturing waste,
                            Zero cost of customization, maximize the use of Smart Data and provide ultimate customer experience.
                        </p></div>




                    {{--            <div class="ps-section__header mb-50">--}}
                    {{--                <div class="row">--}}
                    {{--                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">--}}
                    {{--                        <h3 class="ps-section__title" data-mask="HOT SALE">其他热卖车型</h3>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">--}}
                    {{--                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>上一页</a><a class="ps-next" href="#">下一页<i class="ps-icon-arrow-left"></i></a></div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--            </div>--}}
                    {{--            <div class="ps-section__content">--}}
                    {{--                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">--}}
                    {{--            @foreach(\App\Car::all() as $car)--}}
                    {{--                    <div class="ps-shoes--carousel">--}}
                    {{--                        <div class="ps-shoe">--}}
                    {{--                            <div class="ps-shoe__thumbnail">--}}
                    {{--                               <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>--}}
                    {{--                                <img src="/storage/{{$car['images'][0]['picture']}}" alt="">--}}
                    {{--                                <a class="ps-shoe__overlay" href="{{route('details',$car['id'])}}"></a>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="ps-shoe__content">--}}
                    {{--                                <div class="ps-shoe__variants">--}}
                    {{--                                    <p>{{ $car['description'] }}</p>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="ps-shoe__detail">--}}
                    {{--                                    <a class="ps-shoe__name" href="{{route('details',$car['id'])}}">{{$car['name']}}</a>--}}
                    {{--                                    <span class="ps-shoe__price"> ¥ {{$car['money']}}</span>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                @endforeach--}}
                    {{--                </div>--}}

                    {{--            </div>--}}

                </div>
            </div>

            <div class="ps-container">

                <div class="row q-gridbuilder grid-bg-color-one     false">
                    <div class="small-12 medium-12 xlarge-12  grid-column-alignment-left  columns">
                        <div class="q-margin-base q-headline">
                            <div class="medium-margin     ">
                                <div>
                                    <h2 class="q-display2 ">
                                        SPEC HIGHLIGHTS<br>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="q-margin-base  q-separator">
                            <div class="medium-margin     ">
                                <hr class="separator-primary">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row q-gridbuilder gridspacing-small grid-bg-color-one     false">
                    <div class="small-12 medium-12 xlarge-6  grid-column-alignment-left  columns">
                        <div class="q-margin-base q-image-svg">
                            <div class="none-margin     ">
                                <div class="none-margin     ">
                                    <img src="/images/test.webp" class="q-rectangle-image-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-12 xlarge-6  grid-column-alignment-left  q-grid-row-new-mobile q-grid-row-new-tablet columns">
                        <div class="row q-gridbuilder grid-bg-color-one     false">
                            <div class="small-6 medium-6 xlarge-6  grid-column-alignment-left  columns">
                                <div class="q-margin-base  q-separator">
                                    <div class="medium-margin     ">
                                        <hr class="invisible">
                                    </div>
                                </div>

                                <div class="q-margin-base">


                                    <div class="medium-margin     ">

                                        <div class="q-text q-body1"><p><b>MPG City / Hwy:</b><br> <span role="button" class="show-disclosure q-mod q-mod-rte-disclosure q-rte-disclosure" tabindex="0" data-disclosure-path="/index/vehicles/2019/crossovers-suvs/envision/overview/overview-subcontent/disclosures/19_ENVISION_MPG_DISCLOSURE">22 / 29<sup><span class="q-disclosure-print-hide">†</span><span class="q-disclosure-print-number">(10)</span></sup></span><br> </p></div>
                                    </div>



                                </div>


                                <div class="q-margin-base">


                                    <div class="medium-margin     ">

                                        <div class="q-text q-body1"><p><b>Cargo Volume:</b><br> <span role="button" class="show-disclosure q-mod q-mod-rte-disclosure q-rte-disclosure" tabindex="0" data-disclosure-path="/index/vehicles/2019/crossovers-suvs/envision/overview/overview-subcontent/disclosures/19_ENVISION_CARGO_DISCLOSURE">57.3 cu. ft.<sup><span class="q-disclosure-print-hide">†</span><span class="q-disclosure-print-number">(3)</span></sup></span><br> </p></div>
                                    </div>



                                </div>

                                <div class="q-margin-base">


                                    <div class="none-margin     ">

                                        <div class="q-text q-body1"><p><b>Horsepower:</b><br> 197 HP @ 6300 RPM with 2.5L engine<br> </p></div>
                                    </div>



                                </div>
                            </div>

                            <div class="small-6 medium-6 xlarge-6  grid-column-alignment-left  columns">



                                <div class="q-margin-base  q-separator">
                                    <div class="medium-margin     ">


                                        <hr class="invisible">
                                    </div>
                                </div>
                                <div class="q-margin-base">


                                    <div class="medium-margin     ">

                                        <div class="q-text q-body1"><p><b>Seating Capacity:</b><br> Up to 5</p></div>
                                    </div>



                                </div>



                                <div class="q-margin-base">


                                    <div class="medium-margin     ">

                                        <div class="q-text q-body1"><p><b>Standard Engine:</b><br> 2.5L DOHC 4-cylinder SIDI with VVT<br> </p></div>
                                    </div>



                                </div>



                                <div class="q-margin-base">


                                    <div class="none-margin     ">

                                        <div class="q-text q-body1"><p><b>Rear Legroom:</b><br> 37.5"</p></div>
                                    </div>



                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection