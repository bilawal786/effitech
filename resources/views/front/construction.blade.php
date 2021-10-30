@extends('layouts.front')
@section('content')
    <!-- content begin -->
    <div id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="padding30 mb30" data-bgcolor="#eee">
                                <div class="box-icon-simple left">
                                    <i class="icon_comment_alt wow bounceIn id-color" data-wow-delay=".5s"></i>
                                    <div class="text">
                                        <h3>{{$page->h1}}</h3>
                                        {{$page->d1}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="padding30 mb30" data-bgcolor="#eee">
                                <div class="box-icon-simple left">
                                    <i class="icon_clock_alt wow bounceIn id-color" data-wow-delay=".5s"></i>
                                    <div class="text">
                                        <h3>{{$page->h2}}</h3>
                                        {{$page->d2}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <figure class="pic-hover hover-scale mb30">
                                    <span class="center-xy">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v={{$page->video}}">
                                            <i class="fa fa-play btn-action btn-play btn-action-hide"></i></a>
                                    </span>
                                <span class="bg-overlay"></span>
                                <img src="{{asset($page->vimage)}}" class="img-responsive" alt="">
                            </figure>
                        </div>


                        <div class="col-md-6">

                            <figure class="pic-hover hover-scale mb20">
                                    <span class="center-xy">
                                        <a class="image-popup" href="{{asset($page->image1)}}">
                                            <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                    </span>
                                <span class="bg-overlay"></span>
                                <img src="{{asset($page->image1)}}" class="img-responsive" alt="">
                            </figure>

                            <h3>{{$page->title1}}</h3>
                            <p>{{$page->de1}} </p>
                        </div>

                        <div class="col-md-6">
                            <h3>{{$page->title2}}</h3>
                            <p>{{$page->de2}}</p>

                            <figure class="pic-hover hover-scale mt20">
                                    <span class="center-xy">
                                        <a class="image-popup" href="{{asset($page->image2)}}">
                                            <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                    </span>
                                <span class="bg-overlay"></span>
                                <img src="{{asset($page->image2)}}" class="img-responsive" alt="">
                            </figure>

                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>

@endsection
