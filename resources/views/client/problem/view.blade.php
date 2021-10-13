@extends('layouts.client-dashboard')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        <strong>Succès! </strong> {{ Session::get('message') }}
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                @endif
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du client</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                    @if($problem->client)
                                        <b>Prenom</b>: {{$problem->client->fname}}<br>
                                        <b>Nom</b>: {{$problem->client->lname}}<br>
                                        <b>Email</b>: {{$problem->client->email}}<br>
                                        <b>Telephone</b>: {{$problem->client->phone}}<br>
                                        <b>Client Taper</b>: {{$problem->client->type}}<br>
                                        <b>Address</b>: {{$problem->client->address}}<br>
                                    @else
                                        <b>Supreme</b>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du problème</h5>
                                    <hr>
                                </div>
                                <b>Id</b>: {{$problem->id}}<br>
                                <b>Chantier</b>: {{$problem->site}}<br>
                                <b>Créé à</b>: {{$problem->created_at}}<br>
                                <b>Catégorie</b>: {{$problem->category->name}}<br>
                                <b>Sous-catégorie</b>: {{$problem->subcategory->name}}<br>
                                <b>Description</b>: {{$problem->description}}<br>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Chantier Photos</h5>
                                    <hr>
                                </div>
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach(json_decode($problem->photos, true) as $key => $images )
                                            @if($key == 0)
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('photos/'.$images)}}" alt="First slide">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('photos/'.$images)}}" alt="First slide">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                            class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                            class="carousel-control-next-icon"></span>
                                        <span class="sr-only">Next</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($problem->price)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title">Détails du devis</h5>
                                        <hr>
                                    </div>
                                    <b>Prix</b>: {{$problem->price}} €<br>
                                    <b>Date d'entretien</b>: {{$problem->service_date}} <br>
                                    <b>Statut</b>:
                                    @if($problem->quote_status == 3)
                                        <span class="badge badge-pill badge-primary">En attente de la réponse du client</span>
                                        <br>
                                        <br>
                                        <a href="{{route('problem.quote_status', ['id' => $problem->id, 'status' => '1'])}}"><button class="btn btn-success btn-sm">Accepter</button></a>
                                        <a href="{{route('problem.quote_status', ['id' => $problem->id, 'status' => '2'])}}"><button class="btn btn-danger btn-sm">Rejeter</button></a>
                                    @elseif($problem->quote_status == 1)
                                        <span class="badge badge-pill badge-success">Devis Accepter</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Devis Rejeter</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
