@extends('layouts.client-dashboard')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du client</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                    @if($site->client_id)
                                        <b>Prenom</b>: {{$site->client->fname}}<br>
                                        <b>Nom</b>: {{$site->client->lname}}<br>
                                        <b>Email</b>: {{$site->client->email}}<br>
                                        <b>Telephone</b>: {{$site->client->phone}}<br>
                                        <b>Statue Client</b>: {{$site->client->type}}<br>
                                        <b>Adresse</b>: {{$site->client->address}}<br>
                                    @else
                                        <b>Supreme</b>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du Chantier</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                    <b>Id</b>: {{$site->id}}<br>
                                    <b>Titre</b>: {{$site->title}}<br>
                                    <b>Créé à</b>: {{$site->created_at}}<br>
                                    <b>Description</b>: {{$site->details}}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Toutes les étapes</h5>
                                    <hr>
                                </div>
                                @foreach($site->steps as $step)
                                    <div class="row">
                                        <div class="col-auto text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-end">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge rounded-pill bg-primary">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-end">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border-primary shadow radius-15">
                                                <div class="card-body">
                                                    <div class="profile-tab">
                                                        <div class="custom-tab-1">
                                                            <ul class="nav nav-tabs">
                                                                <li class="nav-item"><a href="#my-posts{{$step->id}}" data-toggle="tab" class="nav-link show active">Des détails</a>
                                                                </li>
                                                                <li class="nav-item"><a href="#about-me{{$step->id}}" data-toggle="tab" class="nav-link">Photos</a>
                                                                </li>
                                                                <li class="nav-item"><a href="#work{{$step->id}}" data-toggle="tab" class="nav-link">Travail Attribuer à</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div id="my-posts{{$step->id}}" class="tab-pane fade active show">
                                                                    <br>
                                                                    <div class="float-end text-primary">{{$step->created_at->format('d-m-y H:ma')}}</div>
                                                                    <h3 class="card-title text-primary">{{$step->title}}</h3>
                                                                    <p class="card-text">{{$step->details}}</p>
                                                                    <p class="card-text ">
                                                                        <span class="badge badge-pill badge-warning">Statut:
                                                                            @if($step->work_status == 0)
                                                                                En cours
                                                                            @else
                                                                                Compléter
                                                                            @endif</span>
                                                                        <span class="badge badge-pill badge-primary">Date de début: {{$step->start_date}}</span>
                                                                        <span class="badge badge-pill badge-success">Date de fin: {{$step->end_date}}</span></p>

                                                                </div>
                                                                <div id="about-me{{$step->id}}" class="tab-pane fade">
                                                                    <div class="row">
                                                                        @foreach(json_decode($step->gallery, true) as $key => $images )
                                                                            <div class="col-md-4">
                                                                                <img style="width: 100%" src="{{asset('photos/'.$images)}}" alt="">
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div id="work{{$step->id}}" class="tab-pane fade">
                                                                    <br>
                                                                    <div class="row">
                                                                        <div>
                                                                            Sous-traitant: {{$step->subcontractor->fname}} {{$step->subcontractor->lname}}
                                                                            <span class="badge badge-pill badge-warning">Travail Statut:
                                                                                @if($step->contractor_status == 0)
                                                                                    En cours
                                                                                @else
                                                                                    Compléter
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <br>
                                                                            Superviseur de travail: {{$step->supervisor->fname}} {{$step->supervisor->lname}}
                                                                            <span class="badge badge-pill badge-warning">Travail Statut:
                                                                                @if($step->supervisor_status == 0)
                                                                                    En cours
                                                                                @else
                                                                                    Compléter
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal -->
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
