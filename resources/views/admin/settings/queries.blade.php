@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Requêtes</div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Service</th>
                                <th>Offre</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($queries as $off)
                                <tr>
                                    <td>{{$off->name}}</td>
                                    <td>{{$off->email}}</td>
                                    <td>{{$off->phone}}</td>
                                    <td>{{$off->service}}</td>
                                    <td>{{$off->offer}}</td>
                                    <td>{{$off->message}}</td>
                                    <td>{{$off->created_at->format('y-m-d')}}</td>
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
