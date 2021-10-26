@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tous mes clients</h5>
                            <table id="zero-conf" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Type</th>
                                    <th>Créé par</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->fname}}</td>
                                        <td>{{$row->lname}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->address}}</td>
                                        <td>
                                            <span class="badge bg-primary">{{$row->type}}</span>
                                        </td>
                                        <td>{{$row->creater->fname}} {{$row->creater->lname}}</td>
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

