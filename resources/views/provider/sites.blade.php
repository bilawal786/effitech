@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Étapes attribués par l'administrateur</h5>
                            <table id="zero-conf" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Chaniter</th>
                                    <th>Client</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($site as $row)
                                    <tr>
                                        <td>{{$row->site->title}}</td>
                                        <td>{{$row->site->client->fname}} {{$row->site->client->lname}}</td>
                                        <td>
                                            @if (Auth::user()->role == 2)
                                                @if($row->contractor_status == 0)
                                                    <span contractor_statusclass="badge bg-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Nouvel Attribué
													</span>
                                                @elseif($row->contractor_status == 1)
                                                    <span class="badge bg-success">
														<i class="fa fa-circle text-success mr-1"></i>
														Compléter
													</span>
                                                @endif
                                            @elseif (Auth::user()->role == 3)
                                                @if($row->supervisor_status == 0)
                                                    <span class="badge bg-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Nouvel Attribué
													</span>
                                                @elseif($row->supervisor_status == 1)
                                                    <span class="badge bg-success">
														<i class="fa fa-circle text-success mr-1"></i>
														Compléter
													</span>
                                                @endif
                                            @endif



                                        </td>
                                        <td>
                                            <a href="{{route('provider.site.view', ['id' => $row->id])}}">
                                                <button class="btn btn-warning btn-sm">Vue</button>
                                            </a>
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

