@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Clients</div>
               <div class="ms-auto">
                       @if(Str::contains(request()->url(), 'particular'))
                           <a href="{{route('export.part')}}"> <button type="button" class="btn btn-primary btn-sm">Exporter les clients</button></a>
                       @else
                           <a href="{{route('export.pro')}}"> <button type="button" class="btn btn-primary btn-sm">Exporter les clients</button></a>
                       @endif
               </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
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
                                <td>
                                    <a href="{{route('client.view', ['id' => $row->id])}}"><button type="button" class="btn btn-success btn-sm">Vue
                                    </button></a>
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
