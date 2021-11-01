@extends('layouts.provider-dashboard')
@section('content')
    @php

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
          $link = "https";
        }
        else
        {
          $link = "http";

          // Here append the common URL characters.
          $link .= "://";

          // Append the host(domain name, ip) to the URL.
          $link .= $_SERVER['HTTP_HOST'];

          // Append the requested resource location to the URL
          $link .= $_SERVER['REQUEST_URI'];
        }

    @endphp
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
                            @if(Str::contains(request()->url(), 'my'))
                                <h5 class="card-title">Clients Besoins <a href="{{route('owner.need.create')}}"><button class="btn btn-primary btn-sm float-right" >Ajouter un nouveau</button></a> </h5>
                            @else
                                <h5 class="card-title">Tous mes clients</h5>
                            @endif

                            <table id="zero-conf" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Taper</th>
                                    <th>Créé par</th>
                                    @if(Str::contains(request()->url(), 'my'))
                                        <th>Statut</th>
                                        <th>Vue</th>
{{--                                        <th>Valider</th>--}}
                                    @endif
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
                                        @if(Str::contains(request()->url(), 'my'))
                                            <td>
                                                @if($row->status == 2)
                                                    En cours
                                                @elseif($row->status == 3)
                                                    J'accepte
                                                @else
                                                    Rejeter
                                                @endif
                                            </td>
                                           {{-- <td>
                                                <a href="{{route('owner.client.status', ['id' => $row->id, 'status' => '3'])}}"><button class="btn btn-primary btn-sm">J'accepte</button></a>
                                                <a href="{{route('owner.client.status', ['id' => $row->id, 'status' => '4'])}}"><button class="btn btn-danger btn-sm">Rejeter</button></a>
                                            </td>--}}
                                            <td>
                                                <a href="{{route('owner.client.view', ['id' => $row->id])}}"><button class="btn btn-success btn-sm">Vue</button></a>
                                            </td>
                                        @endif

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

