@extends('layouts.front')
@section('content')

    <!-- content begin -->
    <div id="content" class="no-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div id="project-img-carousel" class="zoom-gallery">
                        <figure class="pic-hover hover-scale mb30">
                            <a href="{{asset($gallery->photo)}}">
                                    <span class="center-xy">
                                        <i class="fa fa-search btn-action btn-action-hide"></i>
                                    </span>
                                <span class="bg-overlay"></span>
                                <img src="{{asset($gallery->photo)}}" class="img-responsive" alt="">
                            </a>
                        </figure>


                    </div>
                </div>

                <div class="col-md-6">

                    <div class="padding40" data-bgcolor="#f5f5f5">

                        <h3 class="mb20">Détails
                            <span class="tiny-border"></span>
                        </h3>

                        <p>
                           {{$gallery->description}}
                        </p>

                    </div>


                </div>

            </div>
        </div>


    </div>
@endsection
