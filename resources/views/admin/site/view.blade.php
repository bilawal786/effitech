@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Détail de {{$site->id}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <button  data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-success mr-2">Envoyer un devis</button>
                </div>
            </div>

            <hr class="border-top" />
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
                                    <h5 class="card-title">Détails du Chantier</h5>
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
                                    <div class="col py-2">
                                        <div class="card border-primary shadow radius-15">
                                            <div class="card-body">
                                                <div class="float-end text-primary">Mon, Jan 9th 2020 7:00 AM</div>
                                                <h4 class="card-title text-primary">Day 1 Orientation</h4>
                                                <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

        </div>
    </div>

@endsection
