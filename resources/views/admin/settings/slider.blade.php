@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Carrousel</div>
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
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
                                <h5 class="mb-0 text-danger">Carrousel</h5>
                            </div>
                            <hr>
                            <form action="{{route('slider.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">Image du curseur 1</label>
                                    <div class="input-group">
                                        <input type="file" name="image1" class="form-control border-start-0" id="inputLastName1" placeholder="Prénom" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName2" class="form-label">Image du curseur 2</label>
                                    <div class="input-group">
                                        <input type="file" name="image2" class="form-control border-start-0" id="inputLastName2" placeholder="Nom" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputPhoneNo" class="form-label">Image du curseur 1</label>
                                    <div class="input-group">
                                        <input type="file" name="image3" class="form-control border-start-0" id="inputPhoneNo" placeholder="Telephone" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputEmailAddress" class="form-label">Titre 1</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
                                        <input type="text" name="h1" class="form-control border-start-0" value="{{$gs->h1}}" required id="inputEmailAddress" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputChoosePassword" class="form-label">Titre 2</label>
                                    <div class="input-group">
                                        <input type="text" name="h2" class="form-control border-start-0" value="{{$gs->h2}}" required id="inputChoosePassword" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputChoosePassword" class="form-label">Titre 3</label>
                                    <div class="input-group">
                                        <input type="text" name="h3" class="form-control border-start-0" value="{{$gs->h3}}" required id="inputChoosePassword" placeholder="Societe" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputChoosePassword" class="form-label">Titre 4</label>
                                    <div class="input-group">
                                        <input type="text" name="h4" class="form-control border-start-0" value="{{$gs->h4}}" required id="inputChoosePassword" placeholder="Siret" />
                                    </div>
                                </div>
                                <input type="hidden" name="role" value="2">
                                <div class="col-6">
                                    <label for="inputAddress3" class="form-label">Titre 5</label>
                                    <input type="text" name="h5" class="form-control border-start-0" value="{{$gs->h5}}" required id="inputChoosePassword" placeholder="Siret" />
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Sauvegarder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
