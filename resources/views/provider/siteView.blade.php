@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
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
                                        <b>Prenom</b>: {{$step->site->client->fname}}<br>
                                        <b>Nom</b>: {{$step->site->client->lname}}<br>
                                        <b>Email</b>: {{$step->site->client->email}}<br>
                                        <b>Telephone</b>: {{$step->site->client->phone}}<br>
                                        <b>Statue Client</b>: {{$step->site->client->type}}<br>
                                        <b>Adresse</b>: {{$step->site->client->address}}<br>
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
                                    <b>Id</b>: {{$step->site->id}}<br>
                                    <b>Titre</b>: {{$step->site->title}}<br>
                                    <b>Créé à</b>: {{$step->site->created_at}}<br>
                                    <b>Description</b>: {{$step->site->details}}<br>
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
                                    <h5 class="card-title">Etape Details</h5>
                                    <hr>
                                </div>
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
                                                    <div class="float-end text-primary">{{$step->created_at->format('d-m-y H:ma')}}</div>
                                                    <h3 class="card-title text-primary">{{$step->title}}</h3>
                                                    <p class="card-text">{{$step->details}}</p>
                                                    <p class="card-text ">
                                                                        <span class="badge bg-warning">Statut:
                                                                            @if($step->work_status == 0)
                                                                                En cours
                                                                            @else
                                                                                Compléter
                                                                            @endif</span>
                                                        <span class="badge bg-primary">Date de début: {{$step->start_date}}</span>
                                                        <span class="badge bg-success">Date de fin: {{$step->end_date}}</span></p>
                                                    <hr>
                                                    <b>Travail Attribuer à</b>
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div>
                                                                Sous-traitant: {{$step->subcontractor->fname}} {{$step->subcontractor->lname}}
                                                                <span class="badge bg-warning">Travail Statut:
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
                                                                <span class="badge bg-warning">Travail Statut:
                                                                                @if($step->supervisor_status == 0)
                                                                        En cours
                                                                    @else
                                                                        Compléter
                                                                    @endif
                                                            </span>
                                                            </div>
                                                        </div>
                                                       <div class="col-md-4">
                                                           @if(Auth::user()->role == 2)
                                                               @if($step->contractor_status == 0)
                                                               <a href="{{route('provider.step.status', ['id' => $step->id])}}"><button class="btn btn-primary">Validate</button></a>
                                                               @endif
                                                           @elseif(Auth::user()->role == 3)
                                                               @if($step->supervisor_status == 0)
                                                                   <a href="{{route('provider.step.status', ['id' => $step->id])}}"><button class="btn btn-primary">Validate</button></a>
                                                               @endif
                                                           @endif
                                                       </div>
                                                    </div>
                                                    <hr>
                                                    <b>Photos</b>
                                                    <div class="row">
                                                        @foreach(json_decode($step->gallery, true) as $key => $images )
                                                            <div class="col-md-4">
                                                                <img style="width: 100%" src="{{asset('photos/'.$images)}}" alt="">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

