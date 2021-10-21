@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tout Chantier</div>
                <div class="ms-auto">
                        <a href="{{route('export.site')}}"> <button type="button" class="btn btn-primary btn-sm">Exporter Chantier</button></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                        <a href="{{route('site.view', ['id' => $row->id])}}"> <button class="btn btn-success btn-sm">Vue</button></a>
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
