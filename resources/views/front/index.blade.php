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
                        <img src="{{asset('web/images-slider/wide1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

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
                            Construction<span class="id-color">.</span>
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
                            Planification<span class="id-color">.</span>
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
                            Rénovation<span class="id-color">.</span>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('web/images-slider/wide2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />


                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="['center']" data-hoffset="['0']"
                             data-y="['middle']" data-voffset="['0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="600">
                            Ton rêve<span class="id-color">.</span>
                        </div>

                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('web/images-slider/wide16.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />


                        <div class="tp-caption ultra-big-white customin customout start"
                             data-x="['center']" data-hoffset="['0']"
                             data-y="['middle']" data-voffset="['0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_in="opacity:0;scaleX:2;scaleY:2;s:400;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:400;e:Power3.easeOut;"
                             data-start="600">
                            Partenaire<span class="id-color">.</span>
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
                        <h3 class="mt10">Vous cherchez le meilleur partenaire pour vos prochains travaux de construction ?</h3>
                    </div>

                    <div class="col-md-4 text-right">
                        <a href="#" class="btn btn-line-black btn-fx wow fadeIn">Engagez-nous maintenant</a>
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
                                <h3>Personnel professionnel</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".2s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>Économisez du temps et de l'argent</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".4s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>Estimé détaillé</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
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
                                <h3>Achèvement à temps</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".8s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>Aucun coût caché</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </div>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay="1s">
                        <div class="inner">
                            <span class="icon"><i class="icon_box-checked"></i></span>
                            <div class="text">
                                <h3>Zéro réclamation</h3>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
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
                            <li>Ils étaient très sympathiques et c'était un plaisir d'accomplir mes tâches. Je suis très satisfait des services qu'ils ont fournis. Je recommanderai cette entreprise à ma famille et mes amis. Leurs travaux sont professionnels et leur prix était compétitif.
                                <span>Paul, Client</span>
                            </li>
                            <li>Un travail merveilleux, merci! La meilleure entreprise de construction de la ville comme le prouve la qualité des travaux et des services. Leurs services me rendent si spécial. J'aime toujours venir ici, je reviendrais certainement pour de futurs projets.
                                <span>Alex, Client</span>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-portfolio" class="no-bottom" aria-label="section-portfolio">
            <div class="container">
                <h2>Travaux récents<span class="tiny-border"></span></h2>


                <!-- portfolio filter begin -->
                <div class="row">
                    <div class="col-md-12">
                        <ul id="filters">
                            <li><a href="#" data-filter=".commercial">Commercial</a></li>
                            <li><a href="#" data-filter=".education">Education</a></li>
                            <li><a href="#" data-filter=".hospitaly">Hospitaly</a></li>
                            <li><a href="#" data-filter=".office">Office</a></li>
                            <li><a href="#" data-filter=".residential">Residential</a></li>
                            <li class="pull-right"><a href="#" data-filter="*" class="selected">All Projects</a></li>
                        </ul>

                    </div>
                </div>
                <!-- portfolio filter close -->

            </div>

            <div id="gallery" class="gallery invert full-gallery de-gallery pf_full_width">

                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a href="sidenav_project-details-1.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Green House</span>
                                    </span>
                                </span>
                        </a>
                        <img src="images/portfolio/pf%20(1).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item commercial education">
                    <div class="picframe">
                        <a href="sidenav_project-details-2.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Contemporary Building</span>
                                    </span>
                                </span>
                        </a>

                        <img src="images/portfolio/pf%20(2).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item commercial hospitaly">
                    <div class="picframe">
                        <a href="sidenav_project-details-3.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Twin Tower</span>
                                    </span>
                                </span>
                        </a>

                        <img src="images/portfolio/pf%20(3).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item commercial hospitaly">
                    <div class="picframe">
                        <a href="sidenav_project-details-4.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Modern Skyline</span>
                                    </span>
                                </span>
                        </a>
                        <img src="images/portfolio/pf%20(4).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item office commercial">
                    <div class="picframe">
                        <a href="sidenav_project-details-5.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Modern Office</span>
                                    </span>
                                </span>
                        </a>
                        <img src="images/portfolio/pf%20(5).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a href="sidenav_project-details-1.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Country Side House</span>
                                    </span>
                                </span>
                        </a>
                        <img src="images/portfolio/pf%20(6).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item office education">
                    <div class="picframe">
                        <a href="sidenav_project-details-2.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Cube Office</span>
                                    </span>
                                </span>
                        </a>

                        <img src="images/portfolio/pf%20(7).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a href="sidenav_project-details-3.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">London Luxury House</span>
                                    </span>
                                </span>
                        </a>

                        <img src="images/portfolio/pf%20(8).jpg" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

            </div>

        </section>
        <!-- section close -->



    </div>

@endsection

