@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Commercial</div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Siret</th>
                                <th>Catégorie</th>
                                <th>Sous catégorie</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                <tr>
                                    <td>{{$row->fname}}</td>
                                    <td>{{$row->lname}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>{{$row->siret}}</td>
                                    <td>{{empty($row->category->name) ? 'Supprimé' : $row->category->name}}</td>
                                    <td>{{empty($row->subcategory->name) ? 'Supprimé' : $row->subcategory->name}}</td>

                                    <td>
<!--                                        <button type="button" class="btn btn-primary btn-sm"><i class="lni lni-pencil me-0"></i>
                                        </button>-->
                                        <button type="button" class="btn btn-danger btn-sm"><i class="bx bx-box me-0"></i>
                                        </button>
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
