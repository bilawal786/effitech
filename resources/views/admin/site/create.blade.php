@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Chantier</div>
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
                            <h6 class="mb-0 text-uppercase">Ajouter des détails sur le chantier</h6>
                            <hr>
                            <form method="POST" action="{{route('site.store')}}">
                                @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Titre</label>
                                    <input class="form-control mb-3" type="text" name="title" placeholder="Titre">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Client</label>
                                    <select name="client_id" class="single-select form-control" required>
                                        <option value="">Sélectionnez le client</option>
                                        @foreach($client as $sub)
                                            <option value="{{$sub->id}}">{{$sub->fname}} {{$sub->lname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Taper</label>
                                    <select name="type" class="single-select form-control" required>
                                        <option value="">Sélectionnez le Taper</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Rénovation">Rénovation</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputLastName1" class="form-label">Details</label>
                                    <div class="input-group">
                                        <textarea name="details" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
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
