@extends('layouts.client-dashboard')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
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
														<i class="fa fa-circle text-danger mr-1"></i>
														Admin Waiting
													</span>
                                                @elseif($row->quote_status == 0)
                                                @endif
                                            </td>
                                            <td>
{{--                                               <button class="btn btn-primary btn-sm">Accept</button>--}}
{{--                                               <button class="btn btn-danger btn-sm">Reject</button>--}}
                                               <button class="btn btn-success btn-sm">View</button>
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
