@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Offre</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1">


                <div class="col">

                    <div class="card border-top border-0 border-4 border-danger">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase">Offre</h6>
                            <hr>
                            <form method="POST" action="{{route('offer.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Titre</label>
                                        <input class="form-control mb-3" type="text" name="title" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Photo</label>
                                        <input class="form-control mb-3" type="file" required name="photo" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Gallerie</label>
                                        <input class="form-control mb-3" type="file" multiple name="gallery[]">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Diagram Image</label>
                                        <input class="form-control mb-3" type="file" required name="diagram">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Bannière</label>
                                        <input class="form-control mb-3" type="file" required name="banner">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Prix</label>
                                        <input class="form-control mb-3" type="text" required name="price">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Entrez le Nom & Surface</label>
                                            <div class="sizequantity">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <input type="text" name="nom[]" placeholder="Nom" required class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                            <input  type="text" name="surface[]" placeholder="Surface" required class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Action</label><br>
                                            <a  onclick="addmorerow()" class="btn btn-primary btn-sm" >Ajouter</a>
                                            <a  onclick="removerow()" class="btn btn-danger btn-sm" >Supprimer</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Total</label>
                                        <input class="form-control mb-3" type="text" required name="total">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Details</label>
                                        <textarea name="details" class="form-control" id="mytextarea"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <button class="btn btn-primary">Sauvegarder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        function addmorerow(){
            $('.sizequantity').append('<div class="row">\n' +
                '                                                <div class="col-md-6">\n' +
                '                                                    <input type="text" name="nom[]" required placeholder="Nom" class="form-control">\n' +
                '                                                </div>\n' +
                '                                                <div class="col-md-6">\n' +
                '                                                    <input  type="text" name="surface[]" placeholder="Surface" required  class="form-control">\n' +
                '                                                </div>\n' +
                '                                            </div>');
        }
        function removerow(){
            $('.sizequantity .row:last').remove();
        }
    </script>
@endsection
