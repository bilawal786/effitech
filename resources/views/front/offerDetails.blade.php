@extends('layouts.front')
@section('content')

    <!-- content begin -->
    <div id="content" class="no-bottom">
        <div class="container">
            <div class="row">
                <h2>{{$offer->title}}</h2>
                <hr>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div id="project-img-carousel" class="zoom-gallery">
                        <figure class="pic-hover hover-scale mb30">
                            <a href="{{asset($offer->photo)}}">
                                    <span class="center-xy">
                                        <i class="fa fa-search btn-action btn-action-hide"></i>
                                    </span>
                                <span class="bg-overlay"></span>
                                <img src="{{asset($offer->photo)}}" class="img-responsive" alt="">
                            </a>
                        </figure>


                    </div>
                </div>

                <div class="col-md-6">


                    <div class="w3-content w3-display-container">
                        @foreach(json_decode($offer->gallery, true) as $key => $images )
                        <img class="mySlides" src="{{asset('photos/'.$images)}}" style="width:100%">
                        @endforeach
                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>



                </div>

            </div>
            <br>
            <br>
            <div class="row mt-4">

                <div class="col-md-6">
                    <table class="table table-bordered" style="text-align: center">
                        <thead >
                        <tr>
                            <th style="text-align: center" colspan="3">Suurfaces Des Pieces par niveau</th>
                        </tr>
                        <tr>
                            <th style="text-align: center">Nom</th>
                            <th style="text-align: center">Surface</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                @foreach(json_decode($offer->nom, true) as $nom)
                                {{$nom}}<br>
                                @endforeach
                            </td>
                            <td>
                                @foreach(json_decode($offer->surface, true) as $surface)
                                    {{$surface}}<br>
                                @endforeach
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">

                    <div id="project-img-carousel" class="zoom-gallery">
                        <figure class="pic-hover hover-scale mb30">
                            <a href="{{asset($offer->diagram)}}">
                                    <span class="center-xy">
                                        <i class="fa fa-search btn-action btn-action-hide"></i>
                                    </span>
                                <span class="bg-overlay"></span>
                                <img src="{{asset($offer->diagram)}}" class="img-responsive" alt="">
                            </a>
                        </figure>


                    </div>


                </div>

            </div>
            <div class="row">

                <div class="col-md-6">
                   <h1>Prix: {{$offer->price}} €</h1>
                </div>

                <div class="col-md-6">

                    <div class="padding40" data-bgcolor="#f5f5f5">

                        <h3 class="mb20">Détails
                            <span class="tiny-border"></span>
                        </h3>

                        <p>
                          {{$offer->details}}
                        </p>

                    </div>


                </div>

            </div>
        </div>


    </div>
@endsection
