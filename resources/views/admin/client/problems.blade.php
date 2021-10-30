@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Problèmes</div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Chaniter</th>
                                <th>Catégorie</th>
                                <th>Sous catégorie</th>
                                <th>Client Nom</th>
                                <th>Client Email</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($problems as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->site}}</td>
                                    <td>{{empty($row->category->name) ? 'Supprimé' : $row->category->name}}</td>
                                    <td>{{empty($row->subcategory->name) ? 'Supprimé' : $row->subcategory->name}}</td>
                                    <td>{{$row->client->fname}} {{$row->client->lname}}</td>
                                    <td>{{$row->client->email}}</td>
                                    <td>
                                        @if($row->quote_status == 0)
                                            <span class="badge bg-primary">Envoyer un devis</span>
                                        @elseif($row->quote_status == 3)
                                            <span class="badge bg-warning">En attente de client</span>
                                        @elseif($row->quote_status ==1)
                                            <span class="badge bg-success">Devis Accepter</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.problem.view', ['id' => $row->id])}}"> <button class="btn btn-success btn-sm">Vue</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
