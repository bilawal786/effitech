@extends('layouts.client-dashboard')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Chantier</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Chantier</th>
                                        <th>CLient Nom</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sites as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>{{$row->client->fname}} {{$row->client->lname}}</td>
                                            <td>
                                                <a href="{{route('client.site.view', ['id' => $row->id])}}"> <button class="btn btn-success btn-sm">Vue</button></a>
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
