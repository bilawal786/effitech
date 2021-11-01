@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du client</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                    <b>Prenom</b>: {{$client->fname}}<br>
                                    <b>Nom</b>: {{$client->lname}}<br>
                                    <b>Email</b>: {{$client->email}}<br>
                                    <b>Telephone</b>: {{$client->phone}}<br>
                                    <b>Client Taper</b>: {{$client->type}}<br>
                                    <b>Adresse</b>: {{$client->address}}<br>
                                    <b>Créé par</b>: {{$client->creater->fname}} {{$client->creater->lname}}<br>
                                    <b>Créé à</b>: {{$client->created_at->format('d-m-y')}}<br>
                                    <b>Catégorie</b>: {{empty($client->category->name) ? 'Supprimé' : $client->category->name}}<br>
                                    <b>Sous catégorie</b>: {{empty($client->subcategory->name) ? 'Supprimé' : $client->subcategory->name}}<br>
                                    <b>Description</b>: {{$client->notes}}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title">Besoins des clients</h5>
                                            <hr>
                                        </div>
                                        @foreach($client->needs as $need)
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <b>Id</b>: {{$need->id}}<br>
                                                        <b>Catégorie</b>: {{empty($need->category->name) ? 'Supprimé' : $need->category->name}}<br>
                                                        <b>Sous catégorie</b>: {{empty($need->subcategory->name) ? 'Supprimé' : $need->subcategory->name}}<br>
                                                        <b>Taper</b>: {{$need->construction_type}}<br>
                                                        <b>Besoin</b>: {{$need->notes}}<br>
                                                    </p>
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
        </div>

    </div>
@endsection

