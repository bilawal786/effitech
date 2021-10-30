@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Sous-catégorie</div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un nouveau</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Catégorie principale</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->category->name}}</td>
                                    <td>
                                        <a id="delete" href="{{route('subcategory.delete', ['id' => $cat->id])}}"> <button  type="button" class="btn btn-danger btn-sm"><i class="bx bx-box me-0"></i>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle Sous-catégorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Catégorie Pricipal</b><span class="text-danger">*</span></label>
                                <br>
                                <select name="category_id" class="form-control" id="">
                                    @foreach($categories  as $ca)
                                    <option value="{{$ca->id}}">{{$ca->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Nom de catégorie</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="text"  name="name" required placeholder="Nom de catégorie" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sauvegarder</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Proche</button>
                </div>
            </div>
        </div>
    </div>
@endsection
