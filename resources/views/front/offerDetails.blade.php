@extends('layouts.front')
@section('content')

    <img src="{{asset($offer->banner)}}" style="width: 100%" alt="">
    <!-- content begin -->
    <div id="content" class="no-bottom">
        @if(Session::has('message'))
            <div style="display: block" class='success'> {{ Session::get('message') }}</div>
        @endif
        <div class="container">
            <div class="row">
                <h2>{{$offer->title}}</h2>
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
                            <th style="text-align: center" colspan="3">Surfaces Des Pieces</th>
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
                        <tr>
                            <td><b>Total</b></td>
                            <td><b>{{$offer->total}}</b></td>
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
            <br>
            <br>
            <div class="row">

                <div class="col-md-6">
                   <h1>Prix: {{$offer->price}} €</h1>
                    <br>
                    <br>
                    <div style="text-align: center; margin-top: 20px">
                        <button style="font-size: 30px" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Je Suis Intéressé</button>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="padding40" data-bgcolor="#f5f5f5">

                        <h3 class="mb20">Détails
                            <span class="tiny-border"></span>
                        </h3>

                        <p>
                          {!! $offer->details !!}
                        </p>

                    </div>


                </div>

            </div>
        </div>


    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Entrez vos coordonnées</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="{{route('query.submit')}}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Nom:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" placeholder="Nom" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Téléphone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pwd" placeholder="Téléphone" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Message:</label>
                            <div class="col-sm-10">
                                <textarea name="message" placeholder="Message" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <input type="hidden" value="{{$offer->title}}" name="offer">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Proche</button>
                </div>
            </div>

        </div>
    </div>

@endsection
