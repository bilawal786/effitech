@extends('layouts.client-dashboard')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <strong>Succès! </strong> {{ Session::get('message') }}
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Datatable</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                    <tr>
                                        <th>Chaniter</th>
                                        <th>Catégorie</th>
                                        <th>Sous catégorie</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($problems as $row)
                                        <tr>
                                           <td>{{$row->site}}</td>
                                            <td>{{empty($row->category->name) ? 'Supprimé' : $row->category->name}}</td>
                                            <td>{{empty($row->subcategory->name) ? 'Supprimé' : $row->subcategory->name}}</td>
                                            <td>
                                                @if($row->quote_status == 0)
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-warning mr-1"></i>
														Administrateur en attente
													</span>
                                                @elseif($row->quote_status == 1)
                                                    <span class="badge light badge-danger">
														<i class="fa fa-circle text-success mr-1"></i>
														Devis Accepter
													</span>
                                                @elseif($row->quote_status == 2)
                                                    <span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Devis Rejeter
													</span>
                                                @elseif($row->quote_status == 3)
                                                    <a href="{{route('problem.quote_status', ['id' => $row->id, 'status' => '1'])}}">
                                                        <button class="btn btn-success btn-sm">Accepter</button>
                                                    </a>
                                                    <a href="{{route('problem.quote_status', ['id' => $row->id, 'status' => '2'])}}">
                                                        <button class="btn btn-danger btn-sm">Rejeter</button>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('problem.view', ['id' => $row->id])}}">
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
    </div>

@endsection
