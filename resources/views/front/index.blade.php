@extends('layouts.front')
@section('content')
    <!-- content begin -->
    <div id="content" class="no-bottom no-top">

        <!-- revolution slider begin -->
        <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset($gs->image1)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="['center']" data-hoffset="['0']"
                             data-y="['middle']" data-voffset="['0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="600"
                             data-end="1600">
                            {{$gs->h1}}<span class="id-color">.</span>
                        </div>

                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="center"
                             data-y="center"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="1600"
                             data-end="2600">
                            {{$gs->h2}}<span class="id-color">.</span>
                        </div>

                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="center"
                             data-y="center"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="2600">
                            {{$gs->h3}}<span class="id-color">.</span>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset($gs->image2)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />


                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="['center']" data-hoffset="['0']"
                             data-y="['middle']" data-voffset="['0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="600">
                           {{$gs->h4}}<span class="id-color">.</span>
                        </div>

                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset($gs->image3)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />


                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="['center']" data-hoffset="['0']"
                             data-y="['middle']" data-voffset="['0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="600">
                            {{$gs->h5}}<span class="id-color">.</span>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <!-- revolution slider close -->

        <!-- section begin -->
        <section id="section-fun-facts" class="bg-color no-top no-bottom">
            <div class="pt20 pb20">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                            <div class="de_count">
                                <h3 class="timer" data-to="8350" data-speed="2500">0</h3>
                                <span>Heures de travail</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3 class="timer" data-to="248" data-speed="2500">0</h3>
                                <span>Projets terminés</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <h3 class="timer" data-to="852" data-speed="2500">0</h3>
                                <span>Part de pizza</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                            <div class="de_count">
                                <h3 class="timer" data-to="615" data-speed="2500">0</h3>
                                <span>Tasses de café</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <!-- section begin -->
        <section class="call-to-action bg-color dark pt30 pb30" data-speed="5" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="mt10">Vous cherchez le meilleur partenaire pour vos prochains travaux de construction  ou rénovation ?</h3>
                    </div>

                    <div class="col-md-4 text-right">
                        <a href="{{route('front.contact')}}" class="btn btn-line-black btn-fx wow fadeIn">Engagez-nous maintenant</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-features-2" data-stellar-background-ratio=".2">
            <div class="container">
                <div class="row">

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay="0">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>{{$gs->st1}}</h3>
                                {{$gs->sd1}}
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".2s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>{{$gs->st2}}</h3>
                                {{$gs->sd2}}
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".4s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>{{$gs->st3}}</h3>
                                {{$gs->sd3}}
                              </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <div class="spacer-single"></div>

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".6s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>{{$gs->st4}}</h3>
                                {{$gs->sd4}}
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".8s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>{{$gs->st5}}</h3>
                                {{$gs->sd5}}
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay="1s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>{{$gs->st6}}</h3>
                                {{$gs->sd6}}
                             </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="explore-1" class="side-bg text-light">
            <div class="col-md-6 image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7">

                        <h2>Ce qu'ils disent<span class="tiny-border"></span></h2>

                        <ul class="testimonial-list wow fadeIn" data-wow-delay=".25s">
                            <li>{{$gs->review1}}
                                <span>{{$gs->rg1}}</span>
                            </li>
                            <li>{{$gs->review2}}
                                <span>{{$gs->rg2}}</span>
                            </li>
                            <li>{{$gs->review3}}
                                <span>{{$gs->rg3}}</span>
                            </li>
                            <li>{{$gs->review4}}
                                <span>{{$gs->rg4}}</span>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>
        </section>
        <!-- section close -->




    </div>

@endsection

