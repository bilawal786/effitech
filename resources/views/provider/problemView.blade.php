@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
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
                                <div class="w3-content w3-display-container">
                                    @foreach(json_decode($problem->photos, true) as $key => $images )
                                    <img class="mySlides" src="{{asset('photos/'.$images)}}" style="width:100%">
                                    @endforeach
                                        <br>
                                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
                                        <span class="badge bg-success">Devis Accepter</span>
                                    @else
                                        <span class="badge bg-danger">Devis Rejeter</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($problem->contractor_id)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title">Travail Attribuer à</h5>
                                        <hr>
                                    </div>
                                    <b>Sous-traitant</b>: {{$problem->subcontractor->fname}} {{$problem->subcontractor->lname}}<br>
                                    <b>Superviseur de travail</b>: {{$problem->supervisor->fname}} {{$problem->supervisor->lname}}<br>
                                    <b>Propriétaire d'entreprise</b>: {{$problem->owner->fname}} {{$problem->owner->lname}}<br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title">Validation</h5>
                                        <hr>
                                    </div>
                                    <b>Valider le travail lorsqu'il est terminé</b><br>
                                    <b>Statut</b>:

                                    @if (Auth::user()->role == 2)
                                        @if($problem->contractor_status == 0)
                                            <span class="badge bg-warning">In Process</span>
                                        @elseif($problem->contractor_status == 1)
                                            <span class="badge bg-success">Complete</span>
                                        @endif
                                        <br>
                                        <br>
                                        @if($problem->contractor_status == 0)
                                            <a href="{{route('provider.problem.status', ['id' => $problem])}}"><button class="btn btn-primary">Validate</button></a>
                                        @endif
                                    @elseif (Auth::user()->role == 3)
                                        @if($problem->supervisor_status == 0)
                                            <span class="badge bg-warning">In Process</span>
                                        @elseif($problem->supervisor_status == 1)
                                            <span class="badge bg-success">Complete</span>
                                        @endif
                                        <br>
                                        <br>
                                        @if($problem->supervisor_status == 0)
                                            <a href="{{route('provider.problem.status', ['id' => $problem])}}"><button class="btn btn-primary">Validate</button></a>
                                        @endif
                                    @elseif (Auth::user()->role == 4)
                                        @if($problem->owner_status == 0)
                                            <span class="badge bg-warning">In Process</span>
                                        @elseif($problem->owner_status == 1)
                                            <span class="badge bg-success">Complete</span>
                                        @endif
                                        <br>
                                        <br>
                                        @if($problem->owner_status == 0)
                                            <a href="{{route('provider.problem.status', ['id' => $problem])}}"><button class="btn btn-primary">Validate</button></a>
                                        @endif
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

