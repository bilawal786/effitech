@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        {{ Session::get('message') }}
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                @endif
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clients Besoins <a href="{{route('owner.need.create')}}"><button class="btn btn-primary btn-sm float-right" >Ajouter un nouveau</button></a> </h5>

                            <table id="zero-conf" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Client Nom</th>
                                    <th>Catégorie</th>
                                    <th>Sous catégorie</th>
                                    <th>Taper</th>
                                    <th>Besoin</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($needs as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->client->fname}} {{$row->client->lname}}</td>
                                        <td>{{empty($row->category->name) ? 'Supprimé' : $row->category->name}}</td>
                                        <td>{{empty($row->subcategory->name) ? 'Supprimé' : $row->subcategory->name}}</td>
                                        <td>{{$row->construction_type}}</td>
                                        <td>{{$row->notes}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

