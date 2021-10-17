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
                                        <b>Client Taper</b>: {{$site->client->type}}<br>
                                        <b>Address</b>: {{$site->client->address}}<br>
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
                                    <b>Catégorie</b>: {{$site->category->name}}<br>
                                    <b>Sous-catégorie</b>: {{$site->subcategory->name}}<br>
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
                                                    <div class="float-end text-primary">{{$step->created_at->format('d-m-y H:ma')}}</div>
                                                    <h3 class="card-title text-primary">{{$step->title}}</h3>
                                                    <p class="card-text">{{$step->details}}</p>
                                                    <p class="card-text "><span class="badge badge-pill badge-primary">Start Date: {{$step->start_date}}</span> <span class="badge badge-pill badge-success">End Date: {{$step->end_date}}</span></p>
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
