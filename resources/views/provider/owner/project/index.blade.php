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
                            <h5 class="card-title">Projects</h5>
                            <table id="zero-conf" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Chantier</th>
                                    <th>CLient Nom</th>
                                    <th>Taper</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sites as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->title}}</td>
                                        <td>{{$row->client->fname}} {{$row->client->lname}}</td>
                                        <td>{{$row->type}}</td>
                                        <td>
                                            <a href="{{route('owner.site.view', ['id' => $row->id])}}"> <button class="btn btn-success btn-sm">Vue</button></a>
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
@endsection

