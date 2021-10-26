@extends('layouts.client-dashboard')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Toutes les Devis</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    {{ Session::get('message') }}
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Titre</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Prix</th>
                                        <th>Statut</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($quotes as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>{{$row->start_date}}</td>
                                            <td>{{$row->end_date}}</td>
                                            <td>{{$row->price}} €</td>
                                            <td>
                                                @if($row->status == 0)
                                                <a href="{{route('client.quote.status', ['id' => $row->id, 'status' => '1'])}}"> <button class="btn btn-success btn-sm">J'accepte</button></a>
                                                <a href="{{route('client.quote.status', ['id' => $row->id, 'status' => '2'])}}"> <button class="btn btn-danger btn-sm">Rejeter</button></a>
                                                @elseif($row->status == 1)
                                                    <span class="badge badge-pill badge-success">J'accepte</span>
                                                @elseif($row->status == 2)
                                                    <span class="badge badge-pill badge-danger">Rejeter</span>
                                                @endif
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
        </div>
    </div>

@endsection
